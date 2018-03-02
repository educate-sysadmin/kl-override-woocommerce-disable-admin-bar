<?php
/*
Plugin Name: KL Override Woocommerce Disable Admin Bar
Plugin URI: https://github.com/educate-sysadmin/kl-override-woocommerce-disable-admin-bar
Description: Overrides Woocommerce plugin disabling admin bar
Version: 0.1
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/
/* thanks https://www.role-editor.com/woocommerce-admin-bar-access/ */
add_filter('woocommerce_disable_admin_bar', '_wc_disable_admin_bar', 10, 1); 
function _wc_disable_admin_bar($prevent_admin_access) {
    return false;
}
add_filter('woocommerce_prevent_admin_access', '_wc_prevent_admin_access', 10, 1);
function _wc_prevent_admin_access($prevent_admin_access) {
    return false;
}
