<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/6/2017
 * Time: 6:50 PM
 */
class Tsg_Article_Adminhtml_ArticleController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $id = $this->getRequest()->getParam('id');
        $article = Mage::getModel('tsg_article/article')->load($id);

        Mage::register('tsg_article', $article);

        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
        $id = $this->getRequest()->getParam('id');

        $model = null;
        if ($id) {
            $model = Mage::getModel('tsg_article/article')->load($id);
        } else {
            $model = Mage::getModel('tsg_article/article');
        }

        $data = $this->getRequest()->getPost();
        $model->addData($data);

        $backToEdit = (bool)$this->getRequest()->getParam('save_and_continue');
        $success = false;
        try {
            //$model->validate();
            $model->save();
            $this->_getSession()->addSuccess($this->__('Article was saved successfully'));
            $success = true;

        }  catch (Exception $e) {
            $this->_getSession()->addError($this->__('Error occurred while saving article'));
            Mage::logException($e);
        }

        if (!$success || $backToEdit) {
            $this->_redirect('*/*/edit', array('id' => $model->getId()));
        } else {
            $this->_redirect('*/*/index');
        }
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');

        $model = Mage::getModel('tsg_article/article')->load($id);
        try {

            if (!$id) {
                Mage::throwException($this->__('ID was not set'));
            } elseif (!$model->getId()) {
                Mage::throwException($this->__('Article with ID=%s does not exist', $id));
            }

            $model->delete();
            $this->_getSession()->addSuccess($this->__('Article was deleted successfully'));

        } catch (Mage_Core_Exception $e) {
            $this->_getSession()->addError($e->getMessage());
        } catch (Exception $e) {
            $this->_getSession()->addError($this->__('Error occurred while deleting article.'));
            Mage::logException($e);
        }

        $this->_redirect('*/*/index');
    }
}
