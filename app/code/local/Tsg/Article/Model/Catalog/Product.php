<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/20/2017
 * Time: 5:22 PM
 */
class Tsg_Article_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    public function __construct()
    {
        Mage::log(__CLASS__);

        Mage_Catalog_Model_Product::__construct();
    }

    public function getMainCategory()
    {
        return 25;
    }
}
