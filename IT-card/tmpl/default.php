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
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(). "modules/mod_it-card/tmpl/bootstrap-italia.min.css");
?>

<div class="card-wrapper <?php echo $card_wrapper_sfx; ?>">
    <div class="card <?php echo $card_sfx; ?> ">
        <?php if($cardImg) : ?>
        <div class="card card-img no-after">
            <div class="img-wrapper-responsive">
                <div class="img-responsive">
                    <div class="img-wrapper">
                        <img src="<?php echo $cardImgLink ; ?>" alt="Card Image">
                    </div>
                </div>
            </div>
            <?php endif ;?>
            <div class="card-body">
                <?php if ($simpleArticle) : ?>
                <div class="category-top">
                    <a href="<?php echo $simpleArticleCategoryLink ;?>"
                        class="category"><?php echo $simpleArticleCategory ;?></a>
                    <span class="data"><?php echo $simpleArticleCategoryData ;?></span>
                </div>
                <?php endif; ?>
                <?php if ($Categorization) : ?>
                <div class="categoryicon-top">
                    <svg class="icon">
                        <use xlink:href="<?php echo $categorizationsvgLink?>"></use>
                    </svg>
                    <span class="text"><?php echo $categorizationCategoryText ?></span>
                </div>
                <?php endif; ?>
                <?php if ($bigTopIcon) : ?>
                <div class="top-top">
                    <svg class="icon">
                        <use xlink:href="<?php echo $topBigIconLink?>"></use>
                    </svg>
                </div>
                <?php endif; ?>
                <?php if($tagDate) : ?>
                <div class="head-tags">
                    <a href="<?php echo $tagLink?>" class="card-tag"><?php echo  $tagName ?></a>
                    <span class="data"><?php echo $tagData ?></span>
                </div>
                <?php endif; ?>
                <h5 class="card-title"><?php echo $card_title ?></h5>
                <p class="card-text"><?php echo $card_para ?></p>
                <div class="it-card-footer">
                    <?php if($cardSignature) : ?>
                    <span class="card-signature"><?php echo $cardSignatureText ?></span>
                    <?php endif; ?>
                    <?php if($readMoreLink) : ?>
                    <a href="<?php echo $read_more_link; ?>" class="read-more"><span
                            class="text"><?php echo $read_more_text ;?></span>
                        <svg class="icon">
                            <use xlink:href="./bootstrap-italia/svg/sprite.svg#it-arrow-right"></use>
                        </svg>
                    </a>
                    <?php endif;?>
                    <?php if($actionButton) :?>
                    <button class="btn btn-outline-primary btn-sm"><?php echo $actionButtonText;?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>