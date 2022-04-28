<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

$wp_option_name = 'plug_stt_general';

delete_option($wp_option_name);