<?php

/*****************************************************************************
 * This is a commercial software, only users who have purchased a  valid
 * license and accepts the terms of the License Agreement can install and use
 * this program.
 *----------------------------------------------------------------------------
 * @copyright  LCC Alt-team: https://www.alt-team.com
 * @module     "Stock filter"
 * @license    https://www.alt-team.com/addons-license-agreement.html
 ****************************************************************************/

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

