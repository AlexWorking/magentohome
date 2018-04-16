<?php

class Alanstormdotcom_Complexworld_OtherController extends Mage_Core_Controller_Front_Action
{
    public function apiTestAction()
    {
        $model = Mage::getModel('catalog/product_api');
        $results = $model->items();
        var_dump($results);
    }
}