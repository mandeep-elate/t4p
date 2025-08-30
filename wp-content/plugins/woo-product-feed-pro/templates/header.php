<?php
/**
 * Plugin settings page template.
 *
 * @package AdTribes\PFP
 */

use AdTribes\PFP\Helpers\Helper;

if ( ! defined( 'ABSPATH' ) ) {
    die( 'You are not allowed to call this page directly.' );
}
?>

<header class="adt-tw-flex adt-tw-flex-col sm:adt-tw-flex-row adt-tw-justify-between adt-tw-items-start sm:adt-tw-items-center adt-tw-gap-4 sm:adt-tw-gap-0 adt-tw-mb-6">
    <div class="adt-tw-flex adt-tw-items-center adt-tw-gap-6">
        <img src=<?php echo esc_url( ADT_PFP_IMAGES_URL . 'logo.png' ); ?> alt="Product Feed Pro Logo" class="adt-tw-w-44 adt-tw-h-auto" />
        <?php if ( Helper::is_show_logo_upgrade_button() ) : ?>
        <a target="_blank" href="<?php echo esc_url( Helper::get_utm_url( '', 'pfp', 'logo', 'adminpagelogo' ) ); ?>" class="adt-button adt-button-primary adt-button-sm">
            <?php esc_html_e( 'Upgrade to Elite', 'woo-product-feed-pro' ); ?>
            <span class="adt-tw-icon-[fluent--sparkle-16-filled] adt-tw-ml-1 adt-tw-w-4 adt-tw-h-4"></span>
        </a>
        <?php endif; ?>
    </div>
    <div class="adt-help-button adt-tw-group">
        <button class="adt-button adt-tw-flex adt-tw-items-center adt-tw-gap-2">
            <span class="adt-tw-icon-[lucide--circle-help] adt-tw-w-4 adt-tw-h-4"></span>
            <?php esc_html_e( 'Help', 'woo-product-feed-pro' ); ?>
        </button>
        <div class="adt-help-button-content adt-tw-hidden group-hover:adt-tw-block hover:adt-tw-block">
            <div class="adt-help-button-content-inner">
                <div class="adt-help-button-content-inner-title">
                    <?php esc_html_e( 'Helpful Articles', 'woo-product-feed-pro' ); ?>
                </div>
                <a target="_blank" href="<?php echo esc_url( Helper::get_utm_url( 'knowledge-base/setting-up-your-first-google-shopping-product-feed', 'pfp', 'help', 'first shopping feed' ) ); ?>" class="adt-help-button-content-inner-link">
                    <span class="adt-tw-icon-[lucide--link] adt-help-button-content-inner-link-icon"></span>
                    <?php esc_html_e( 'Create a Google Shopping Feed', 'woo-product-feed-pro' ); ?>
                </a>
                <a target="_blank" href="<?php echo esc_url( Helper::get_utm_url( 'knowledge-base/add-gtin-mpn-upc-ean-product-condition-optimised-title-and-brand-attributes', 'pfp', 'help', 'adding fields' ) ); ?>" class="adt-help-button-content-inner-link">
                    <span class="adt-tw-icon-[lucide--link] adt-help-button-content-inner-link-icon"></span>
                    <?php esc_html_e( 'Adding GTIN, Brand, MPN and More', 'woo-product-feed-pro' ); ?>
                </a>
                <a target="_blank" href="<?php echo esc_url( Helper::get_utm_url( 'knowledge-base/help-my-feed-processing-is-stuck/', 'pfp', 'help', 'feed stuck' ) ); ?>" class="adt-help-button-content-inner-link">
                    <span class="adt-tw-icon-[lucide--link] adt-help-button-content-inner-link-icon"></span>
                    <?php esc_html_e( 'Help, my Feed is Stuck!', 'woo-product-feed-pro' ); ?>
                </a>
                <div class="adt-help-button-content-inner-title">
                    <?php esc_html_e( 'Resources', 'woo-product-feed-pro' ); ?>
                </div>
                <a target="_blank" href="<?php echo esc_url( Helper::get_utm_url( 'blog', 'pfp', 'help', 'blog' ) ); ?>" class="adt-help-button-content-inner-link">
                    <span class="adt-tw-icon-[lucide--newspaper] adt-help-button-content-inner-link-icon"></span>
                    <?php esc_html_e( 'Feed Marketing Blog', 'woo-product-feed-pro' ); ?>
                </a>
                <a target="_blank" href="<?php echo esc_url( Helper::get_utm_url( 'support', 'pfp', 'help', 'support' ) ); ?>" class="adt-help-button-content-inner-link">
                    <span class="adt-tw-icon-[lucide--users] adt-help-button-content-inner-link-icon"></span>
                    <?php esc_html_e( 'Support', 'woo-product-feed-pro' ); ?>
                </a>
                <a target="_blank" href="https://www.youtube.com/channel/UCXp1NsK-G_w0XzkfHW-NZCw" class="adt-help-button-content-inner-link">
                    <span class="adt-tw-icon-[lucide--youtube] adt-help-button-content-inner-link-icon"></span>
                    <?php esc_html_e( 'YouTube Channel', 'woo-product-feed-pro' ); ?>
                </a>
            </div>
        </div>
    </div>
</header>
