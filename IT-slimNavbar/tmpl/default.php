<?php
/**
 * @version     1.0.0
 * @package     mod_it-slimnavBar
 * @copyright   Copyright (C) 2019. All rights reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Sourav Prasad <souravpd007@gmail.com>
 */

 //No Direct Access
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(). "modules/mod_it-slimnavbar/tmpl/bootstrap-italia.min.css");
$document->addScript(JURI::base(). "modules/mod_it-slimnavBar/tmpl/bootstrap-italia.min.css");
?>