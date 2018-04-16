<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/13/2017
 * Time: 6:37 PM
 */

require_once(Mage::getModuleDir('controllers','Mage_Adminhtml') . DS . 'Catalog' . DS . 'ProductController.php');
class Tsg_Article_Adminhtml_Catalog_ProductController
    extends Mage_Adminhtml_Catalog_ProductController
{
    public function indexAction()
    {
        parent::indexAction();
    }
}