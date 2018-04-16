<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/20/2017
 * Time: 5:34 PM
 */
class Tsg_Article_Model_Observer
{
    public function addItemToMenu(Varien_Event_Observer $observer)
    {
        /* @var $menu Varien_Data_Tree_Node */
        $menu = $observer->getMenu();

        $tree = $menu->getTree();
        $itemData = array(
            'name' => Mage::helper('tsg_article')->__('Article'),
            'id' => 'tsg_article',
            'url' => Mage::getUrl('tsg_article/index'),
            'is_active' => false
        );

        $articleNode = new Varien_Data_Tree_Node(
            $itemData,
            'id',
            $tree,
            $menu
        );

        $menu->addChild($articleNode);

        return $this;
    }

    public function salesQuoteAddItem($observer)
    {
        /* @var $item Mage_Sales_Model_Quote_Item */
        $item = $observer->getQuoteItem();

        $additionalOptions = array(
            'is_surprise' => 1
        );

        $item->addOption(array(
            'code'  => 'additional_options',
            'value' => serialize($additionalOptions),
        ));

        $quote = $item->getQuote();


        $product = $item ->getProduct();

    }
}