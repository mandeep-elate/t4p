<?php
/**
 * Plugin Name: WooCommerce Shared Parent Stock
 * Plugin URI: https://www.elateagency.com/
 * Description: Allows multiple child products to share the same stock from a single "parent" product.
 * Version: 1.0.5
 * Author: Roshan Lal
 * Author URI: https://www.elateagency.com/
 * Text Domain: wc-parent-stock
 * Domain Path: /languages
 * Requires at least: 5.0
 * Requires PHP: 7.2
 * WC requires at least: 3.0
 * WC tested up to: 8.0
 * Woo: 12345:342928dfsfhsf8429842374wdf4234sfd
 *
 * @package WC_Parent_Stock
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Main Plugin Class
 */
class WC_Parent_Stock {

    /**
     * Constructor
     */
    public function __construct() {
        // Check if WooCommerce is active
        if (!$this->is_woocommerce_active()) {
            add_action('admin_notices', array($this, 'woocommerce_missing_notice'));
            return;
        }

        // Initialize the plugin
        add_action('plugins_loaded', array($this, 'init'));
        
        // Add HPOS compatibility
        add_action('before_woocommerce_init', array($this, 'declare_hpos_compatibility'));
    }
    
    /**
     * Declare HPOS compatibility
     */
    public function declare_hpos_compatibility() {
        if (class_exists('\Automattic\WooCommerce\Utilities\FeaturesUtil')) {
            \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility('custom_order_tables', plugin_basename(__FILE__), true);
        }
    }

    /**
     * Initialize the plugin
     */
    public function init() {
        // Hook into WooCommerce add to cart validation
        add_filter('woocommerce_add_to_cart_validation', array($this, 'validate_add_to_cart'), 10, 5);

        // IMPORTANT: Use only ONE primary hook for stock reduction to avoid duplicates
        // We'll use woocommerce_payment_complete as the primary hook since it's the most reliable
        add_action('woocommerce_payment_complete', array($this, 'on_payment_complete'), 10, 1);
        
        // Use other hooks as fallbacks with lower priority
        add_action('woocommerce_order_status_changed', array($this, 'on_order_status_changed'), 20, 4);
        add_action('woocommerce_reduce_order_stock', array($this, 'fallback_reduce_order_stock'), 30, 1);
        
        // Remove the before_reduce_order_stock hook as it's causing duplicate reductions
        // add_action('woocommerce_before_reduce_order_stock', array($this, 'before_reduce_order_stock'));

        // Optional: Override displayed stock quantity for child products
        add_filter('woocommerce_product_get_stock_quantity', array($this, 'get_parent_stock_quantity'), 10, 2);
        add_filter('woocommerce_product_variation_get_stock_quantity', array($this, 'get_parent_stock_quantity'), 10, 2);

        // Optional: Add admin notice recommending to disable "Manage stock?" for child products
        add_action('admin_notices', array($this, 'child_product_stock_notice'));
    }

    /**
     * Check if WooCommerce is active
     *
     * @return bool
     */
    public function is_woocommerce_active() {
        return in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')));
    }

    /**
     * Display notice if WooCommerce is not active
     */
    public function woocommerce_missing_notice() {
        ?>
<div class="error">
    <p><?php _e('WooCommerce Shared Parent Stock requires WooCommerce to be installed and active.', 'wc-parent-stock'); ?>
    </p>
</div>
<?php
    }

    /**
     * Display notice recommending to disable "Manage stock?" for child products
     */
    public function child_product_stock_notice() {
        $screen = get_current_screen();
        if ($screen && ($screen->id === 'product' || $screen->id === 'edit-product')) {
            ?>
<div class="notice notice-info is-dismissible">
    <p><?php _e('WooCommerce Shared Parent Stock: For child products using parent stock, it is recommended to disable "Manage stock?" to prevent double stock reduction.', 'wc-parent-stock'); ?>
    </p>
</div>
<?php
        }
    }

    /**
     * Get the parent product by SKU
     *
     * @param string $parent_sku The parent product SKU
     * @return WC_Product|false The parent product or false if not found
     */
    private function get_parent_product_by_sku($parent_sku) {
        if (empty($parent_sku)) {
            return false;
        }

        $parent_id = wc_get_product_id_by_sku($parent_sku);
        if (!$parent_id) {
            return false;
        }

        return wc_get_product($parent_id);
    }

    /**
     * Get the parent stock SKU from a product
     *
     * @param WC_Product $product The product
     * @return string|false The parent stock SKU or false if not found
     */
    private function get_parent_stock_sku($product) {
        if (!$product) {
            return false;
        }

        // Try to get from product attribute first
        $parent_sku = $product->get_attribute('parent_stock_sku');
        
        // If not found in attribute, try meta field
        if (empty($parent_sku)) {
            $parent_sku = $product->get_meta('parent_stock_sku', true);
        }

        return !empty($parent_sku) ? $parent_sku : false;
    }

    /**
     * Get order statuses that reduce stock
     * 
     * @return array Array of order statuses that reduce stock
     */
    private function get_stock_reduction_statuses() {
        // Check if the WooCommerce function exists
        if (function_exists('wc_get_order_stock_reduction_statuses')) {
            return wc_get_order_stock_reduction_statuses();
        }
        
        // Fallback to default statuses if the function doesn't exist
        return apply_filters(
            'wc_parent_stock_reduction_statuses',
            array('processing', 'completed')
        );
    }

    /**
     * Check if an order has already been processed for stock reduction
     *
     * @param WC_Order $order The order
     * @return bool Whether the order has been processed
     */
    private function is_order_processed($order) {
        if (!$order) {
            return false;
        }
        
        // Check for our custom meta
        $processed = $order->get_meta('_parent_stock_processed', true);
        if (!empty($processed)) {
            return true;
        }
        
        // Also check for a custom order note as a secondary verification
        $notes = wc_get_order_notes(array('order_id' => $order->get_id()));
        foreach ($notes as $note) {
            if (strpos($note->content, 'WC Parent Stock: Processing stock reduction') !== false) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Validate add to cart by checking parent product stock
     *
     * @param bool $passed Whether validation passed
     * @param int $product_id Product ID
     * @param int $quantity Quantity
     * @param int $variation_id Variation ID (optional)
     * @param array $variations Variation data (optional)
     * @return bool Whether validation passed
     */
    public function validate_add_to_cart($passed, $product_id, $quantity, $variation_id = 0, $variations = array()) {
        // Get the product
        $product_id_to_check = $variation_id > 0 ? $variation_id : $product_id;
        $product = wc_get_product($product_id_to_check);

        if (!$product) {
            return $passed;
        }

        // Get parent stock SKU
        $parent_sku = $this->get_parent_stock_sku($product);
        if (!$parent_sku) {
            return $passed; // No parent stock SKU, use normal validation
        }

        // Get parent product
        $parent_product = $this->get_parent_product_by_sku($parent_sku);
        if (!$parent_product) {
            // Parent product not found, log error and use normal validation
            error_log(sprintf('WC Parent Stock: Parent product with SKU "%s" not found for product ID %d', $parent_sku, $product_id_to_check));
            return $passed;
        }

        // Check if parent product manages stock
        if (!$parent_product->managing_stock()) {
            return $passed;
        }

        // Get current cart quantity of products using the same parent stock
        $cart_quantity = 0;
        if (!WC()->cart->is_empty()) {
            foreach (WC()->cart->get_cart() as $cart_item) {
                $cart_product = $cart_item['data'];
                $cart_parent_sku = $this->get_parent_stock_sku($cart_product);
                
                if ($cart_parent_sku === $parent_sku) {
                    $cart_quantity += $cart_item['quantity'];
                }
            }
        }

        // Check if there's enough stock
        $stock_quantity = $parent_product->get_stock_quantity();
        $required_quantity = $quantity + $cart_quantity;

        if ($stock_quantity < $required_quantity) {
            // Not enough stock
            $message = sprintf(
                __('Sorry, we do not have enough "%s" in stock to fulfill your order (%d available). We currently have %d in stock.', 'wc-parent-stock'),
                $product->get_name(),
                $required_quantity,
                $stock_quantity
            );
            wc_add_notice($message, 'error');
            return false;
        }

        return $passed;
    }

    /**
     * Handle stock reduction on payment complete
     *
     * @param int $order_id The order ID
     */
    public function on_payment_complete($order_id) {
        $order = wc_get_order($order_id);
        if (!$order) {
            error_log('WC Parent Stock: Invalid order ID in on_payment_complete: ' . $order_id);
            return;
        }
        
        // Check if this order has already been processed
        if ($this->is_order_processed($order)) {
            error_log('WC Parent Stock: Order #' . $order_id . ' already processed, skipping payment_complete hook');
            return;
        }
        
        $this->process_order_stock_reduction($order, 'payment_complete');
    }
    
    /**
     * Fallback method to handle stock reduction
     *
     * @param WC_Order $order The order
     */
    public function fallback_reduce_order_stock($order) {
        if (!$order || !is_a($order, 'WC_Order')) {
            error_log('WC Parent Stock: Invalid order object in fallback_reduce_order_stock');
            return;
        }
        
        // Check if this order has already been processed
        if ($this->is_order_processed($order)) {
            error_log('WC Parent Stock: Order #' . $order->get_id() . ' already processed, skipping fallback_reduce_order_stock hook');
            return;
        }
        
        $this->process_order_stock_reduction($order, 'fallback_reduce_order_stock');
    }
    
    /**
     * Handle stock reduction on order status change
     *
     * @param int $order_id The order ID
     * @param string $status_from Previous status
     * @param string $status_to New status
     * @param WC_Order $order The order
     */
    public function on_order_status_changed($order_id, $status_from, $status_to, $order) {
        // Only process if changing to a status that should reduce stock
        $reduce_stock_statuses = $this->get_stock_reduction_statuses();
        
        if (!in_array($status_to, $reduce_stock_statuses)) {
            return;
        }
        
        // Check if this order has already been processed
        if ($this->is_order_processed($order)) {
            error_log('WC Parent Stock: Order #' . $order_id . ' already processed, skipping status_changed hook');
            return;
        }
        
        $this->process_order_stock_reduction($order, 'status_changed_' . $status_to);
    }
    
    /**
     * Process stock reduction for an order
     *
     * @param WC_Order $order The order
     * @param string $trigger What triggered this stock reduction
     */
    private function process_order_stock_reduction($order, $trigger) {
        // Double-check if this order has already been processed
        if ($this->is_order_processed($order)) {
            error_log('WC Parent Stock: Order #' . $order->get_id() . ' already processed, aborting process_order_stock_reduction');
            return;
        }
        
        // Mark the order as processed to prevent duplicate stock reduction
        $order->update_meta_data('_parent_stock_processed', current_time('timestamp'));
        $order->save();
        
        // Add a note about which hook triggered the stock reduction
        $order->add_order_note(
            sprintf(
                __('WC Parent Stock: Processing stock reduction triggered by %s', 'wc-parent-stock'),
                $trigger
            )
        );
        
        // Group items by parent product to avoid reducing stock multiple times
        $parent_quantities = array();
        $parent_products = array();
        $items_by_parent = array();
        
        // First pass: group items by parent product and calculate total quantities
        foreach ($order->get_items() as $item_id => $item) {
            // Get the product
            $product = $item->get_product();
            if (!$product) {
                continue;
            }

            // Get parent stock SKU
            $parent_sku = $this->get_parent_stock_sku($product);
            if (!$parent_sku) {
                continue; // No parent stock SKU, use normal stock reduction
            }

            // Get parent product
            $parent_product = $this->get_parent_product_by_sku($parent_sku);
            if (!$parent_product) {
                // Parent product not found, log error and skip
                error_log(sprintf('WC Parent Stock: Parent product with SKU "%s" not found for order item %d', $parent_sku, $item->get_id()));
                continue;
            }

            // Check if parent product manages stock
            if (!$parent_product->managing_stock()) {
                continue;
            }
            
            // Get quantity to reduce
            $qty = $item->get_quantity();
            
            // Store parent product and add to total quantity
            $parent_id = $parent_product->get_id();
            if (!isset($parent_quantities[$parent_id])) {
                $parent_quantities[$parent_id] = 0;
                $parent_products[$parent_id] = $parent_product;
                $items_by_parent[$parent_id] = array();
            }
            
            $parent_quantities[$parent_id] += $qty;
            $items_by_parent[$parent_id][] = array(
                'item_id' => $item_id,
                'item' => $item,
                'product' => $product,
                'quantity' => $qty
            );
        }
        
        // Second pass: reduce stock for each parent product
        foreach ($parent_quantities as $parent_id => $total_qty) {
            $parent_product = $parent_products[$parent_id];
            $parent_sku = $parent_product->get_sku();
            
            // Get current stock before reduction
            $current_stock = $parent_product->get_stock_quantity();
            
            // Add debug info
            $order->add_order_note(
                sprintf(
                    __('WC Parent Stock: Current stock of parent product "%s" (SKU: %s, ID: %d) is %d. Attempting to reduce by %d total units from %d child products.', 'wc-parent-stock'),
                    $parent_product->get_name(),
                    $parent_sku,
                    $parent_id,
                    $current_stock,
                    $total_qty,
                    count($items_by_parent[$parent_id])
                )
            );
            
            // List all child products being reduced
            $child_products_list = array();
            foreach ($items_by_parent[$parent_id] as $item_data) {
                $child_product = $item_data['product'];
                $child_qty = $item_data['quantity'];
                $child_products_list[] = sprintf('%s (x%d)', $child_product->get_name(), $child_qty);
                
                // Prevent WooCommerce from reducing stock for this item
                $this->prevent_stock_reduction($item_data['item']);
            }
            
            $order->add_order_note(
                sprintf(
                    __('WC Parent Stock: Child products using parent "%s": %s', 'wc-parent-stock'),
                    $parent_product->get_name(),
                    implode(', ', $child_products_list)
                )
            );

            // Manually reduce stock to ensure it's working correctly
            $new_stock = max(0, $current_stock - $total_qty);
            $parent_product->set_stock_quantity($new_stock);
            $parent_product->save();
            
            // Log stock reduction
            $order->add_order_note(
                sprintf(
                    __('Stock reduced by %d from parent product "%s" (SKU: %s). Stock changed from %d to %d.', 'wc-parent-stock'),
                    $total_qty,
                    $parent_product->get_name(),
                    $parent_sku,
                    $current_stock,
                    $new_stock
                )
            );
        }
    }

    /**
     * Prevent WooCommerce from reducing stock for an order item
     *
     * @param WC_Order_Item_Product $item The order item
     */
    private function prevent_stock_reduction($item) {
        // Get the product
        $product = $item->get_product();
        if (!$product) {
            return;
        }

        // Store original stock management setting
        $product_id = $product->get_id();
        $original_manage_stock = $product->get_manage_stock();
        
        // Temporarily disable stock management for this product using CRUD methods
        $product_object = wc_get_product($product_id);
        if ($product_object) {
            $product_object->set_manage_stock(false);
            $product_object->save();
            
            // Add action to restore original setting after WooCommerce processes the order
            add_action('woocommerce_reduce_order_stock', function($order) use ($product_id, $original_manage_stock) {
                // Restore original stock management setting using CRUD methods
                $product_to_restore = wc_get_product($product_id);
                if ($product_to_restore) {
                    $product_to_restore->set_manage_stock($original_manage_stock);
                    $product_to_restore->save();
                }
            });
        }
    }

    /**
     * Override displayed stock quantity for child products
     *
     * @param int|null $stock_quantity The stock quantity
     * @param WC_Product $product The product
     * @return int|null The parent stock quantity or original stock quantity
     */
    public function get_parent_stock_quantity($stock_quantity, $product) {
        if (!$product) {
            return $stock_quantity;
        }

        // Get parent stock SKU
        $parent_sku = $this->get_parent_stock_sku($product);
        if (!$parent_sku) {
            return $stock_quantity; // No parent stock SKU, use original stock quantity
        }

        // Get parent product
        $parent_product = $this->get_parent_product_by_sku($parent_sku);
        if (!$parent_product) {
            return $stock_quantity; // Parent product not found, use original stock quantity
        }

        // Check if parent product manages stock
        if (!$parent_product->managing_stock()) {
            return $stock_quantity;
        }

        // Return parent stock quantity
        return $parent_product->get_stock_quantity();
    }
}

// Initialize the plugin
new WC_Parent_Stock(); 