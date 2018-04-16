<?php

class Alanstormdotcom_Complexworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function populateEntriesAction() {
        for($i=0;$i<10;$i++) {
            $weblog2 = Mage::getModel('complexworld/eavblogpost');
            $weblog2->setTitle('This is a test '.$i);
            $weblog2->save();
        }

        echo 'Done';
    }

    public function showcollectionAction() {
        $weblog2 = Mage::getModel('complexworld/eavblogpost');
        $entries = $weblog2->getCollection()->addAttributeToSelect('title');
        $entries->load();
        foreach($entries as $entry)
        {
            // var_dump($entry->getData());
            echo '<h3>'.$entry->getTitle().'</h3>';
        }
        echo '<br>Done<br>';
    }

    public function varientestAction() {
        $thing_1 = new Varien_Object();
        $thing_1->setName('Richard');
        $thing_1->setAge(24);

        $thing_2 = new Varien_Object();
        $thing_2->setName('Jane');
        $thing_2->setAge(12);

        $thing_3 = new Varien_Object();
        $thing_3->setName('Spot');
        $thing_3->setLastName('The Dog');
        $thing_3->setAge(7);

        $collection_of_things = new Varien_Data_Collection();
        $collection_of_things
            ->addItem($thing_1)
            ->addItem($thing_2)
            ->addItem($thing_3);

        /*foreach($collection_of_things as $thing)
        {
            var_dump($thing->getData());
            echo '</br>';
        }
        echo '------------------------------------------------</br>';

        var_dump($collection_of_things->getFirstItem());
        echo '</br>';
        var_dump($collection_of_things->getLastItem()->getData());*/
        var_dump($collection_of_things->getItemsByColumnValue('name','Spot'));
    }

    public function testAction()
    {
        $first = ['like' => 's%'];
        $second = ['like' => '%s%'];
        $collection_of_products = Mage::getModel('catalog/product')
            ->getCollection()->addFieldToFilter('sku', array($first, $second));

       echo "Our collection now has " . count($collection_of_products) . ' item(s)</br>';
          echo  count(Mage::getModel('catalog/product')
                ->getCollection()
                ->addFieldToFilter('sku', array($first))
                ->addFieldToFilter('sku', array($second))
          );
    }
}