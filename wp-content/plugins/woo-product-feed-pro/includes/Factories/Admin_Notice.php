<?php
/**
 * Author: Rymera Web Co
 *
 * @package AdTribes\PFP\Factories
 */

namespace AdTribes\PFP\Factories;

use AdTribes\PFP\Abstracts\Abstract_Class;
use AdTribes\PFP\Helpers\Helper;

/**
 * Class Admin_Notice
 */
class Admin_Notice extends Abstract_Class {

    /**
     * Holds the admin notice message.
     *
     * @since 13.3.3
     * @access protected
     *
     * @var string The admin notice message.
     */
    protected $message;

    /**
     * Holds the admin notice type.
     *
     * @since 13.3.3
     * @access protected
     *
     * @var string The admin notice type.
     */
    protected $type;

    /**
     * Holds the format type of message. Either 'string' or 'html'.
     *
     * @since 13.3.3
     * @access protected
     *
     * @var string The message format.
     */
    protected string $message_format;

    /**
     * Holds the dismissible status of the notice.
     *
     * @since 13.3.4
     * @access protected
     *
     * @var bool The dismissible status of the notice.
     */
    protected bool $is_dismissible;

    /**
     * Holds the missing plugins.
     *
     * @since 13.3.7
     * @access protected
     *
     * @var array The missing plugins.
     */
    protected array $failed_dependencies;

    /**
     * Constructor.
     *
     * @since 13.3.3
     * @access public
     *
     * @param string $message                  The admin notice message.
     * @param string $type                     The admin notice type.
     * @param string $message_format           The message format. Either 'string' or 'html'.
     * @param bool   $is_dismissible           The dismissible status of the notice.
     * @param array  $failed_dependencies      The failed dependencies.
     */
    public function __construct( $message, $type = 'error', $message_format = 'string', $is_dismissible = true, $failed_dependencies = array() ) {
        $this->message             = $message;
        $this->type                = $type;
        $this->message_format      = $message_format;
        $this->is_dismissible      = $is_dismissible;
        $this->failed_dependencies = $failed_dependencies;
    }

    /**
     * Run the class.
     *
     * @since 13.3.3
     * @access public
     */
    public function run() {

        if ( did_action( 'admin_notices' ) ) {
            $this->add_notice();
        } else {
            add_action( 'admin_notices', array( $this, 'add_notice' ) );
        }
    }

    /**
     * Get missing plugins.
     *
     * @since 13.3.7
     * @access private
     *
     * @return array The missing plugins.
     */
    private function _failed_dependencies() {
        $failed_dependencies = array();
        if ( ! empty( $this->failed_dependencies['missing_plugins'] ) ) {
            foreach ( $this->failed_dependencies['missing_plugins'] as $failed_dependency ) {
                $plugin_file = WP_PLUGIN_DIR . "/{$failed_dependency['plugin-base']}";
                if ( file_exists( $plugin_file ) ) {
                    $plugin_data = get_plugin_data( $plugin_file );

                    $failed_dependencies[] = sprintf(
                        /* translators: %1$s = opening <a> tag; %2$s = closing </a> tag */
                        esc_html__(
                            '%1$sPlease ensure you have the %3$s plugin installed and activated.%2$s%4$sClick here to activate &rarr;%5$s',
                            'woo-product-feed-pro'
                        ),
                        '<p>',
                        '</p>',
                        '<a href="' . $plugin_data['PluginURI'] . '">' . $plugin_data['Name'] . '</a>',
                        sprintf(
                            '<p class="action-wrap"><a class="button button-primary" href="%s" title="%s">',
                            wp_nonce_url(
                                self_admin_url(
                                    'plugins.php?action=activate&plugin='
                                ) . $failed_dependency['plugin-base'],
                                'activate-plugin_' . $failed_dependency['plugin-base']
                            ),
                            esc_attr__( 'Activate this plugin', 'woo-product-feed-pro' )
                        ),
                        '</a></p>',
                    );
                } else {
                    $message = '';
                    if ( false !== strpos( $failed_dependency['plugin-base'], 'woocommerce.php' ) ) {
                        $message .= sprintf(/* translators: %1$s = opening <p> tag; %2$s = closing </p> tag; %3$s = Product Feed Pro for WooCommerce */
                            esc_html__(
                                '%1$sUnable to activate %3$s plugin. Please install and activate WooCoomerce plugin first.%2$s',
                                'woo-product-feed-pro'
                            ),
                            '<p>',
                            '</p>',
                            $failed_dependency['plugin-name']
                        );
                    }

                    $message .= sprintf(/* translators: %1$s = opening <p> tag; %2$s = closing </p> tag; %3$s = Product Feed Pro for WooCommerce */
                        esc_html__(
                            '%1$s%3$sClick here to install %5$s plugin &rarr;%4$s%2$s',
                            'woo-product-feed-pro'
                        ),
                        '<p>',
                        '</p>',
                        sprintf(
                            '<a href="%s" title="%s">',
                            wp_nonce_url(
                                self_admin_url(
                                    'update.php?action=install-plugin&plugin='
                                ) . $failed_dependency['plugin-key'],
                                'install-plugin_' . $failed_dependency['plugin-key']
                            ),
                            esc_attr__( 'Install this plugin', 'woo-product-feed-pro' )
                        ),
                        '</a>',
                        $failed_dependency['plugin-name']
                    );

                    $failed_dependencies[] = $message;
                }
            }
        } elseif ( ! empty( $this->failed_dependencies['failed_version_requirements'] ) ) {
            foreach ( $this->failed_dependencies['failed_version_requirements'] as $failed_dependency ) {
                $failed_dependencies[] = sprintf(
                    /* translators: %1$s = opening <a> tag; %2$s = closing </a> tag */
                    esc_html__(
                        '%1$s%3$s version needs to be on at least version %4$s to work properly with Product Feed Pro Pro. %2$s%1$sPlease update by clicking below.%2$s%5$sUpdate plugin &rarr;%6$s',
                        'woo-product-feed-pro'
                    ),
                    '<p>',
                    '</p>',
                    '<strong>' . $failed_dependency['plugin-name'] . '</strong>',
                    '<strong>' . $failed_dependency['required-version'] . '</strong>',
                    sprintf(
                        '<p class="action-wrap"><a class="button button-primary" href="%s" title="%s">',
                        wp_nonce_url(
                            self_admin_url(
                                'update.php?action=upgrade-plugin&plugin='
                            ) . $failed_dependency['plugin-base'],
                            'activate-plugin_' . $failed_dependency['plugin-base']
                        ),
                        esc_attr__( 'Update plugin', 'woo-product-feed-pro' )
                    ),
                    '</a></p>',
                );
            }
        }

        return ! empty( $failed_dependencies ) ? implode( '', $failed_dependencies ) : '';
    }

    /**
     * Renders admin notice.
     *
     * @since 13.3.3
     * @access public
     */
    public function add_notice() {
        $message_id     = 'woo-sea-' . md5( $this->message );
        $message_format = $this->message_format;
        $message        = $this->message;
        $type           = $this->type;
        $is_dismissible = $this->is_dismissible;

        switch ( $type ) {
            case 'failed_dependency':
                $failed_dependencies = $this->_failed_dependencies();
                Helper::locate_admin_template(
                    'notices/failed-dependency-notice.php',
                    true,
                    true,
                    array(
                        'message'             => $message,
                        'failed_dependencies' => $failed_dependencies,
                    )
                );
                break;
            case 'allow_tracking':
                Helper::locate_admin_template(
                    'notices/allow-tracking-notice.php',
                    true,
                    true,
                    array(
                        'message_id'     => $message_id,
                        'message'        => $message,
                        'type'           => $type,
                        'message_format' => $message_format,
                        'is_dismissible' => $is_dismissible,
                    )
                );
                break;
            default:
                Helper::locate_admin_template(
                    'notices/admin-notice.php',
                    true,
                    true,
                    array(
                        'message_id'     => $message_id,
                        'message'        => $message,
                        'type'           => $type,
                        'message_format' => $message_format,
                        'is_dismissible' => $is_dismissible,
                    )
                );
                break;
        }
    }
}
