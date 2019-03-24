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
/* Params */
$slimHeaderSuffix = htmlspecialchars($params->get('slimHeaderSuffix'));


$brandLink =  $params->get('brandLink');
$brandText =  $params->get('brandText');
$linkOne =  $params->get('linkOne');



$linkOneText =  $params->get('linkOneText');
$linkTwo =  $params->get('linkTwo');
$linkTwoText =  $params->get('linkTwoText');
$dropdownlinkOne =  $params->get('dropdownlinkOne');
$dropdownlinkOneText =  $params->get('dropdownlinkOneText');
$dropdownlinkTwo =  $params->get('$dropdownlinkTwo');
$dropdownlinkTwoText =  $params->get('dropdownlinkTwoText');
$buttonLink =  $params->get('$buttonLink');
$buttonText =  $params->get('$buttonText');
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_it-slimnavBar', $params->get('layout', 'default'));

?>

