<?php


class Potoky_Surprise_Model_Resource_Surprise extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('potoky_surprise/surprise', 'surprise_id');
    }
}