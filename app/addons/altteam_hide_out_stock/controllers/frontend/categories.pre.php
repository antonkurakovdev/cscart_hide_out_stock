<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$_REQUEST['category_id'] = empty($_REQUEST['category_id']) ? 0 : $_REQUEST['category_id'];

if ($mode == 'view') {
    if (!empty($_REQUEST['hide_out_stock'])) {
	$param['hide_out_stock'] = $_REQUEST['hide_out_stock'];
	$_SESSION['hide_out_stock'] = $_REQUEST['hide_out_stock'];
    } elseif (!empty($_SESSION['hide_out_stock'])) {
	$params['hide_out_stock'] = $_SESSION['hide_out_stock'];
    }
}

?>
