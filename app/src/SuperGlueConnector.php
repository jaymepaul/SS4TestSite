<?php

use SilverStripe\SuperGlue\Connector;
use SilverStripe\CMS\Model\SiteTree;

class SuperGlueConnector implements Connector
{
    /**
     * @return void
     */
    public function getTitle()
    {
        return 'Home page -> Standard pages';
    }

    /**
     * @return void
     */
    public function getTemplate(SiteTree $page)
    {
        return 'HomePageSuperPages';
    }

    /**
     * @return void
     */
    public function getDataList(SiteTree $page)
    {
        return Page::get()->filter('ParentID', $page->ID);
    }
}
