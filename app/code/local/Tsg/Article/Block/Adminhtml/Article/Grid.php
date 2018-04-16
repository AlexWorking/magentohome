<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/10/2017
 * Time: 6:18 PM
 */
class Tsg_Article_Block_Adminhtml_Article_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('tsg_article/article')->getCollection();
        /* @var $collection Mage_Cms_Model_Mysql4_Block_Collection */
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header'    => Mage::helper('tsg_article')->__('ID'),
            'align'     => 'left',
            'index'     => 'article_id',
            'width'     => '10'
        ));

        $this->addColumn('title', array(
            'header'    => Mage::helper('tsg_article')->__('Title'),
            'align'     => 'left',
            'index'     => 'title'
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}
