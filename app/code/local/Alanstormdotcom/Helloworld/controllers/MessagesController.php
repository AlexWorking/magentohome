<?php

class Alanstormdotcom_Helloworld_MessagesController extends Mage_Core_Controller_Front_Action
{
    public function goodbyeAction()
    {
        echo 'Another Goodbye';
    }

    public function systemAction()
    {
        header('Content-Type: text/xml');
        echo $config = Mage::getConfig()
            ->loadModulesConfiguration('system.xml')
            ->getNode()
            ->asXML();
        exit;
    }
}