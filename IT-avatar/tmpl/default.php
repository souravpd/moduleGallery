<?php
/**
 * @version     1.0.0
 * @package     mod_it-avatar
 * @copyright   Copyright (C) 2019. All rights reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Sourav Prasad <souravpd007@gmail.com>
 */

 //No Direct Access
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(). "modules/mod_it-card/tmpl/bootstrap-italia.min.css");
?>
<div class="avatar-wrapper <?php echo $avatar_wrapper_sfx; ?>">
<?php if($staticAvatar) : ?>
<div class="avatar size-<?php echo $avatarSize ;?> avatar-<?php echo $avatarColour;?>">
<?php endif; ?>
<?php if($dynamicAvatar): ?>
<a href="<?php echo $avatarLink ;?>" class="avatar size-<?php echo $avatarSize ;?>" data-toggle="tooltip" data-html="true" data-placement="<?php echo $tooltipPos ;?>" title="<?php echo $tooltipContent ;?>">
<?php endif; ?>
<?php if($avatarType=="img"): ?>
    <img src="<?php echo $avatarImgLink ;?>" alt="<?php echo $avatarAltText ;?>">
<?php endif; ?>
<?php if($avatarType=="svg"): ?>
   
    <svg class="icon icon-secondary"><use xlink:href="<?php echo $avatarSvgLink ;?>"></use></svg>    
    
<?php endif;?>
<?php if($avatarType=="text"): ?>
    
    <p aria-hidden="true"><?php echo $avatarText ;?></p>   
    
<?php endif;?>
<span class="sr-only"><?php echo $srText ;?></span>
<?php if ($avatarBehaviour) : ?>
    <div class="<?php echo $avatarBehaviourType ;?>">
    <svg class="icon icon-white"><use xlink:href="<?php echo $avatarBehaviourSvgLink;?>"></use></svg>        
    </div>
<?php endif; ?>
<?php if($staticAvatar):?>
</div>
<?php endif;?>
<?php if($dynamicAvatar):?>
</a>
<?php endif;?>
<?php if ($extraText) : ?>
<div class="extra-text">
      <h4><?php echo $extraTextHeading ; ?></h4>
      <time><?php echo $extraTextData ; ?></time>
    </div>
<?php endif; ?>
</div>