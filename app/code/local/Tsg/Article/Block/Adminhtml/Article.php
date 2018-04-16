<?php

/**
 * Created by PhpStorm.
 * User: serhii.korobov
 * Date: 7/10/2017
 * Time: 6:48 PM
 */
class Tsg_Article_Block_Adminhtml_Article extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected $_blockGroup = 'tsg_article';

    /**
     * Block constructor
     */
    public function __construct()
    {
        $this->_controller = 'adminhtml_article';

        parent::__construct();
    }
}