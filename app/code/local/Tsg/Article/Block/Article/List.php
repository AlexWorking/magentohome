<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/17/2017
 * Time: 5:42 PM
 */
class Tsg_Article_Block_Article_List extends Mage_Core_Block_Template
{
    /**
     * @var Tsg_Article_Model_Resource_Article_Collection
     */
    protected $_articleCollection;

    public function getArticleCollection()
    {
        if (is_null($this->_articleCollection)) {
            $model = Mage::getModel('tsg_article/article');
            /* @var $collection Tsg_Article_Model_Resource_Article_Collection */
            $collection = $model->getCollection();

            $this->_articleCollection = $collection;
        }

        return $this->_articleCollection;
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->getArticleCollection()->count()) {
            return '';
        }

        return parent::_toHtml();
    }
}
