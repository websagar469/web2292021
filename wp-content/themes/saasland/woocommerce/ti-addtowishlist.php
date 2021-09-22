<?php
/**
 * The Template for displaying add to wishlist product button.
 *
 * @version 1.22.0
 * @package TInvWishlist\Template
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
wp_enqueue_script( 'tinvwl' );
?>
<div class="tinv-wraper cart_btn_gadget woocommerce tinv-wishlist <?php echo esc_attr( $class_postion ) ?>">
    <?php do_action( 'tinvwl_wishlist_addtowishlist_button', $product, $loop ); ?>
    <?php do_action( 'tinvwl_wishlist_addtowishlist_dialogbox' ); ?>
    <div class="tinvwl-tooltip"><?php echo wp_kses_post( tinv_get_option( 'add_to_wishlist' . ( $loop ? '_catalog' : '' ), 'text' ) ); ?></div>
</div>