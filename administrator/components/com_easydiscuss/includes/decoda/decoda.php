<?php
/**
* @package      EasyDiscuss
* @copyright	Copyright (C) 2010 Stack Ideas Private Limited. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* EasyDiscuss is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Restricted access');

if (!class_exists('Decoda')) {
	require_once(__DIR__ . '/decoda/Decoda.php');
}

class EasyDiscussDecoda extends Decoda
{

    public function initHook($type)
    {
        require_once(__DIR__ . '/decoda/hooks/' . $type . '.php');

        $hook = new CensorHook();

        $this->addHook($hook);
    }
}