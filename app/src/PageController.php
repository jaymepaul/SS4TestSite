<?php

use SilverStripe\View\Requirements;
use CWP\CWP\PageTypes\BasePageController;

class PageController extends BasePageController
{
    protected function init()
    {
        parent::init();

        Requirements::javascript('nzta/promo-overlay:javascript/promooverlay.js');
        Requirements::javascript('nzta/promo-overlay:javascript/overlayvideo.js');
        Requirements::css('nzta/promo-overlay:css/promooverlay.css');
    }
}
