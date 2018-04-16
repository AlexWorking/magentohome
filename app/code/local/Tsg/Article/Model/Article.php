<?php
/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 6/29/17
 * Time: 7:07 PM
 */

class Tsg_Article_Model_Article extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('tsg_article/article');
    }
} 