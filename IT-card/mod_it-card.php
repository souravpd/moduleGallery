<?php
/**
 * @version     1.0.0
 * @package     mod_it-card
 * @copyright   Copyright (C) 2019. All rights reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Sourav Prasad <souravpd007@gmail.com>
 */

 //No Direct Access
defined('_JEXEC') or die;

/* Params */
$card_wrapper_sfx = htmlspecialchars($params->get('card_wrapper_sfx'));
$card_sfx = htmlspecialchars($params->get('card_sfx'));
//Simple Article Fields
$simpleArticle =  $params->get('simpleArticle');
$simpleArticleCategory =  $params->get('simpleArticleCategory');
$simpleArticleCategoryLink =  $params->get('simpleArticleCategoryLink');
$simpleArticleCategoryData =  $params->get('simpleArticleCategoryData');
//Categorization fields
$Categorization =  $params->get('Categorization');
$categorizationCategoryText =  $params->get('categorizationCategoryText');
$categorizationsvgLink =  $params->get('categorizationsvgLink');
//Big top icon fields
$bigTopIcon =  $params->get('bigTopIcon');
$topBigIconLink =  $params->get('topBigIconLink');
//Tag and date
$tagDate =  $params->get('tagDate');
$tagName =  $params->get('tagName');
$tagLink =  $params->get('tagLink');
$tagData =  $params->get('tagData');

//Card Title and Body
$card_title =  $params->get('card_title');
$card_para =  $params->get('card_para');

//Footer
//card-Signature
$cardSignature =  $params->get('cardSignature');
$cardSignatureText =  $params->get('cardSignatureText');
//Read More Link
$readMoreLink =  $params->get('readMoreLink');
$read_more_text =  $params->get('read_more_text');
$read_more_link =  $params->get('read_more_link');
//Action button
$actionButton =  $params->get('actionButton');
$actionButtonText =  $params->get('actionButtonText');

//Image Cards
$cardImg =  $params->get('cardImg');
$cardImgLink =  $params->get('cardImgLink');


// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_it-card', $params->get('layout', 'default'));

?>




