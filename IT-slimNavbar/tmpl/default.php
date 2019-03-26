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
$document->addScript(JURI::base(). "modules/mod_it-slimnavBar/tmpl/bootstrap-italia.bundle.min.js");
?>
<div class="it-header-slim-wrapper <?php echo $slimHeaderSuffix ; ?> "style="z-index:2;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="it-header-slim-wrapper-content">
          <a class="d-none d-lg-block navbar-brand" href="<?php echo $brandLink ; ?>"><?php echo $brandText ;?></a>
          <div class="nav-mobile">
            <nav>
              <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu2" role="button" aria-expanded="false" aria-controls="menu2">
                <span><?php echo $brandText ;?></span>
                <svg class="icon">
                  <use xlink:href="./svg/sprite.svg#it-expand"></use>
                </svg>
              </a>
              <div class="link-list-wrapper collapse" id="menu2">
                <ul class="link-list">
                  <li><a href="<?php echo $linkOne ; ?>"><?php echo $linkOneText ; ?></a></li>
                  <li><a class="active" href="<?php echo $linkTwo ;?>"><?php echo $linkTwoText; ?></a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="header-slim-right-zone">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                <span>ITA</span>
                <svg class="icon d-none d-lg-block">
                  <use xlink:href="./svg/sprite.svg#it-expand"></use>
                </svg>
              </a>
              <div class="dropdown-menu">
                <div class="row">
                  <div class="col-12">
                    <div class="link-list-wrapper">
                      <ul class="link-list">
                        <li><a class="list-item" href="<?php echo $dropdownlinkOne ;?>"><span><?php echo $dropdownlinkOneText ;?></span></a></li>
                        <li><a class="list-item" href="<?php echo $dropdownlinkTwo ;?>"><span><?php echo $dropdownlinkTwoText ;?></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-access-top-wrapper">
              <button class="btn btn-primary btn-sm" href="<?php echo $buttonLink ;?>" type="button"><?php echo $buttonText ;?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>