<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/10/2017
 * Time: 7:08 PM
 */
class Tsg_Article_Block_Adminhtml_Article_Edit_Tab_Main extends Mage_Adminhtml_Block_Widget_Form
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    protected function _prepareForm()
    {
        $model = Mage::registry('tsg_article');
        if (!$model) {
            $model = new Varien_Object();
        }

        $form = new Varien_Data_Form(
            array('id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post')
        );

        $fieldset = $form->addFieldset(
            'base_fieldset',
            array('legend' => Mage::helper('cms')->__('General Information'), 'class' => 'fieldset-wide')
        );

        $fieldset->addField('save_and_continue', 'hidden', array(
            'name' => 'save_and_continue'
        ));

        if ($model->getId()) {
             $fieldset->addField('article_id', 'label', array(
                'name' => 'article_id',
                'label'     => Mage::helper('tsg_article')->__('Id'),
                'title'     => Mage::helper('tsg_article')->__('Id'),
            ));
        }

        $fieldset->addField('title', 'text', array(
            'name'      => 'title',
            'label'     => Mage::helper('tsg_article')->__('Block Title'),
            'title'     => Mage::helper('tsg_article')->__('Block Title'),
            'required'  => true,
        ));

        $fieldset->addField('content', 'textarea', array(
            'name'      => 'content',
            'label'     => Mage::helper('tsg_article')->__('Content'),
            'title'     => Mage::helper('tsg_article')->__('Content'),
            'required'  => true,
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(false);
        $this->setForm($form);

        return parent::_prepareForm();
    }

    public function getTabLabel()
    {
        return $this->__('Main');
    }

    public function getTabTitle()
    {
        return $this->__('Main');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }
}