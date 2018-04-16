<?php
/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 6/29/17
 * Time: 7:09 PM
 */

class Tsg_Article_Model_Resource_Article extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('tsg_article/article', 'article_id');
    }
} 