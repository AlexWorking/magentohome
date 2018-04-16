<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/20/2017
 * Time: 5:17 PM
 */
class Tsg_Article_Helper_Catalog_Category extends Mage_Catalog_Helper_Category
{
    public function __construct()
    {
        Mage::log(__CLASS__);
    }

    public function canShow($category)
    {
        if (1) {
            return parent::canShow($category);
        } else {
            return false;
        }
    }
}
