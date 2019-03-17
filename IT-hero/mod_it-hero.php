<?php
/**
 * @version     1.0.0
 * @package     mod_it-hero
 * @copyright   Copyright (C) 2019. All rights reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Sourav Prasad <souravpd007@gmail.com>
 */

 //No Direct Access
defined('_JEXEC') or die;
/* Params */
$hero_wrapper_suffix = htmlspecialchars($params->get('hero_wrapper_suffix'));

//Image Type HERO
$imageHero =  $params->get('imageHero');
$heroImageLink =  $params->get('heroImageLink');
$altImageText =  $params->get('altImageText');

//Textual Hero

$textualHero =  $params->get('textualHero');
$categoryText =  $params->get('categoryText');
$headingText =  $params->get('headingText');
$paraText =  $params->get('paraText');
$buttonLabel =  $params->get('buttonLabel');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_it-hero', $params->get('layout', 'default'));

?>

