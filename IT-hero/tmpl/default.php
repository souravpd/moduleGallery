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
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(). "modules/mod_it-hero/tmpl/bootstrap-italia.min.css");
?>
<div class = "it-hero-wrapper <?php echo $hero_wrapper_suffix ; ?>">
    <?php if($imageHero) : ?>
    <!-- img -->
    <div class="img-responsive-wrapper">
    <div class="img-responsive">
    <div class="img-wrapper">
    <img src="<?php echo $heroImageLink ;?>" title="Hero Image" alt = "<?php echo $altImageText ;?>">
    </div>
    </div>
    </div>
    <?php endif; ?>
    <?php if($textualHero) : ?>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="it-hero-text-wrapper bg-dark">
    <span class="it-category"><?php echo $categoryText ; ?></span>
    <h1 class="no_tac"><?php echo $headingText ; ?></h1>
    <p class = "d-none d-lg-block"><?php echo $paraText; ?></p>
    <div class="it-btn-container"><a class="btn btn-sm btn-outline-primary" href="#"><?php echo $buttonLabel ; ?></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php endif; ?>
</div>