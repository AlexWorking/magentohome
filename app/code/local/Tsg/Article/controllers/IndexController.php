<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/13/2017
 * Time: 6:26 PM
 */
class Tsg_Article_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function viewAction()
    {
        $id = $this->getRequest()->getParam('id');

        $article = null;
        if ($id) {
            $article = Mage::getModel('tsg_article/article')->load($id);
        }

        if (!$article ||
            ($article && !$article->getId())
        ) {
            $this->norouteAction();
            return;
        }

        Mage::register('current_article', $article);

        $this->loadLayout();
        $this->renderLayout();
    }
}
