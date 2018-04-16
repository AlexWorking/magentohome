<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/10/2017
 * Time: 7:03 PM
 */
class Tsg_Article_Block_Adminhtml_Article_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('article_tabs');
        $this->setDestElementId('edit_form');
    }
}