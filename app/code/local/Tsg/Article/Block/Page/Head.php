<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/20/2017
 * Time: 5:19 PM
 */
class Tsg_Article_Block_Page_Head extends Mage_Page_Block_Html_Head
{
    public function __construct(array $args = array())
    {
        Mage::log(__CLASS__);

        parent::__construct($args);
    }

    /**
     * Retrieve URL to robots file
     *
     * @return string
     */
    public function getRobots()
    {
        if (empty($this->_data['robots'])) {
            $this->_data['robots'] = Mage::getStoreConfig('design/head/default_robots');
        }
        return $this->_data['robots'];
    }
}
