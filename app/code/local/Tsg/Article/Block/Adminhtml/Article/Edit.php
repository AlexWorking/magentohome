<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/10/2017
 * Time: 6:44 PM
 */
class Tsg_Article_Block_Adminhtml_Article_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected $_blockGroup = 'tsg_article';

    /**
     * Block constructor
     */
    public function __construct()
    {
        $this->_controller = 'adminhtml_article';
        parent::__construct();

        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save and Continue Edit'),
            'onclick'   => "$('save_and_continue').value = 1; editForm.submit();",
            'class'     => 'save',
        ), -100);
    }

    public function getFormActionUrl()
    {
        return $this->getUrl('*/article/save', array('id' => $this->_getModel()->getId()));
    }

    protected function _getModel()
    {
        $model = Mage::registry('tsg_article');

        return $model;
    }
}