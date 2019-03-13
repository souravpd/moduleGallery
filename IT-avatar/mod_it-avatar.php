<?php
/**
 * @version     1.0.0
 * @package     mod_it-avatar
 * @copyright   Copyright (C) 2013. All rights reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Sourav Prasad <souravpd007@gmail.com>
 */

 //No Direct Access
defined('_JEXEC') or die;

/* Params */
$avatar_wrapper_sfx = htmlspecialchars($params->get('avatar_wrapper_sfx'));
$avatarSize =  $params->get('avatarSize');
$staticAvatar =  $params->get('staticAvatar');
$dynamicAvatar =  $params->get('dynamicAvatar');
$avatarLink =  $params->get('avatarLink');
$tooltipContent =  $params->get('tooltipContent');
$tooltipPos =  $params->get('tooltipPos');
$avatarType =  $params->get('avatarType');
$avatarImgLink =  $params->get('avatarImgLink');
$avatarAltText =  $params->get('avatarAltText');
$avatarColour =  $params->get('avatarColour');
$avatarSvgLink =  $params->get('avatarSvgLink');
$avatarText =  $params->get('avatarText');
$srText =  $params->get('srText');
$avatarBehaviour =  $params->get('avatarBehaviour');
$avatarBehaviourType =  $params->get('avatarBehaviourType');
$avatarBehaviourSvgLink =  $params->get('avatarBehaviourSvgLink');
$extraText =  $params->get('extraText');
$extraTextHeading =  $params->get('extraTextHeading');
$extraTextData =  $params->get('extraTextData');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_it-avatar', $params->get('layout', 'default'));

?>
