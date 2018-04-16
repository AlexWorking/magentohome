<?php

/* @var Mage_Catalog_Model_Resource_Setup $installer */
$installer = $this;

$installer->startSetup();

$tabName = $installer->getTable('tsg_article/article');

$installer->getConnection()->addColumn($tabName, 'content', array(
    'nullable'  => false,
    'type'=> 'text',
    'comment' => 'Main content'
));

$installer->endSetup();
