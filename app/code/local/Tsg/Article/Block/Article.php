<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/17/2017
 * Time: 5:41 PM
 */
class Tsg_Article_Block_Article extends Mage_Core_Block_Template
{
    /**
     * @return Tsg_Article_Block_Article
     */
    public function getArticle()
    {
        return Mage::registry('current_article');
    }
}
