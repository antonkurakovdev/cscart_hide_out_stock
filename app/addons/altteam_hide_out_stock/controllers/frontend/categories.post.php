<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$_REQUEST['category_id'] = empty($_REQUEST['category_id']) ? 0 : $_REQUEST['category_id'];

if ($mode == 'view') {
    if (!empty($_REQUEST['hide_out_stock'])) {
        $products = Registry::get('view')->getTemplateVars('products');
        if(empty($products)) {
            if (defined('AJAX_REQUEST')) {
                fn_filters_not_found_notification();
                exit;
            }
        }
    }
}

