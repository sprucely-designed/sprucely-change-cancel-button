<?php
/**
 * Plugin Name:       Sprucely Designed Change Cancel Button
 * Plugin URI:        https://www.sprucely.net/?utm_source=sprucelychangecancel&utm_campaign=author_uri&utm_medium=plugin_uri
 * Description:       This changes the cancel button from WooCommerce Subscriptions to go to Contact Us
 * Author:            Terry @ Sprucely Designed
 * Author URI:        https://www.sprucely.net/
 * Version:           1.0.0
 */

function sprucely_change_my_subscriptions_button( $actions, $subscription ) {

	$actions['cancel'] = array(
				'url'  => '/contact-us/',
				'name' => _x('Contact Us to Update/Cancel', 'label on button, imperative', 'woocommerce-subscriptions' ),
	);

	return $actions;
}

add_filter( 'wcs_view_subscription_actions', 'sprucely_change_my_subscriptions_button', 100, 2 );