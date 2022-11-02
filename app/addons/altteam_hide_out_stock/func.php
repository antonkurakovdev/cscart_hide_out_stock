<?php

/*****************************************************************************
 * This is a free CS-Cart add-on developed by Alt-team www.alt-team.com.
 *----------------------------------------------------------------------------
 * @copyright  LCC Alt-team: http://www.alt-team.com
 * @module     "Hide out of stock"
 * @version    CS-Cart v.4
 ****************************************************************************/


if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_altteam_hide_out_stock_get_products($params, $fields, $sortings, $condition, &$join, $sorting, $group_by, $lang_code, $having)
{
    if (!empty($params['hide_out_stock']) && $params['hide_out_stock'] == 'Y') {
        $join .= db_quote(" INNER JOIN ?:products product_amount ON (product_amount.product_id = products.product_id AND product_amount.amount > 0 AND product_amount.tracking IN ('B','D')) OR (product_amount.product_id = products.product_id AND product_amount.tracking IN ('O'))");
    }
}

