<?php
/*****************************************************************************
 * This is a free CS-Cart add-on developed by Alt-team www.alt-team.com.
 *----------------------------------------------------------------------------
 * @copyright  LCC Alt-team: http://www.alt-team.com
 * @module     "Hide out of stock"
 * @version    CS-Cart v.4
 ****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'get_products'
);
