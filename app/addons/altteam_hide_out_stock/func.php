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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_altteam_hide_out_stock_get_products($params, $fields, $sortings, $condition, &$join, $sorting, $group_by, $lang_code, $having)
{
    if (!empty($params['hide_out_stock']) && $params['hide_out_stock'] == 'Y') {
        $join .= db_quote(" INNER JOIN ?:products product_amount ON (product_amount.product_id = products.product_id AND product_amount.amount > 0 AND product_amount.tracking IN ('B','D')) OR (product_amount.product_id = products.product_id AND product_amount.tracking IN ('O'))");
    }
}

