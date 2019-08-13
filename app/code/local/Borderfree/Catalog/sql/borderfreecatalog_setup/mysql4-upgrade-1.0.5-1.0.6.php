<?php
$installer = $this;
$installer->startSetup();

$entityTypeId = $installer->getEntityTypeId('catalog_product');

$installer->addAttribute('catalog_product', 'care',  array(
			'group' => 'Borderfree',
			'sort_order' => 17,
			'type' => 'varchar',
			'backend' => '',
			'frontend' => '',
			'label' => 'Care Instructions',
			'note' => '',
			'input' => 'textarea',
			'class' => '',
			'source' => '',
			'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
			'visible' => true,
			'required' => false,
			'user_defined' => true,
			'default' => '',
			'visible_on_front' => false,
			'unique' => false,
			'is_configurable' => false,
			'used_for_promo_rules' => false,
			'apply_to' => '',
			'searchable' => false,
			'filterable' => 0,
			'comparable' => false,
			'visible_in_advanced_search' => false,
			'used_for_price_rules' => false,
			'filterable_in_search' => false
		));

$installer->addAttribute('catalog_product', 'contents',  array(
			'group' => 'Borderfree',
			'sort_order' => 18,
			'type' => 'varchar',
			'backend' => '',
			'frontend' => '',
			'label' => 'Contents and/or Materials',
			'note' => '(e.g., 60% cotton, 40% rayon). Use commas to separate values in this field.',
			'input' => 'textarea',
			'class' => '',
			'source' => '',
			'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
			'visible' => true,
			'required' => false,
			'user_defined' => true,
			'default' => '',
			'visible_on_front' => false,
			'unique' => false,
			'is_configurable' => false,
			'used_for_promo_rules' => false,
			'apply_to' => '',
			'searchable' => false,
			'filterable' => 0,
			'comparable' => false,
			'visible_in_advanced_search' => false,
			'used_for_price_rules' => false,
			'filterable_in_search' => false
		));

$installer->addAttribute('catalog_product', 'hs_codes',  array(
		'group' => 'Borderfree',
		'sort_order' => 19,
		'type' => 'varchar',
		'backend' => '',
		'frontend' => '',
		'label' => 'Harmonized System (HS) codes',
		'note' => 'Comma Separated List',
		'input' => 'text',
		'class' => '',
		'source' => '',
		'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
		'visible' => true,
		'required' => false,
		'user_defined' => true,
		'default' => '',
		'visible_on_front' => false,
		'unique' => false,
		'is_configurable' => false,
		'used_for_promo_rules' => false,
		'apply_to' => '',
		'searchable' => false,
		'filterable' => 0,
		'comparable' => false,
		'visible_in_advanced_search' => false,
		'used_for_price_rules' => false,
		'filterable_in_search' => false
));

$installer->addAttribute('catalog_product', 'is_ormd',  array(
		'group' => 'Borderfree',
		'sort_order' => 20,
		'type' => 'int',
		'backend' => '',
		'frontend' => '',
		'label' => 'Is ORM-D',
		'note' => 'Indicates if the SKU has the "Other Regulated Materials for Domestic transport only"',
		'input' => 'select',
		'class' => '',
		'source' => 'eav/entity_attribute_source_boolean',
		'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
		'visible' => true,
		'required' => false,
		'user_defined' => true,
		'default' => '0',
		'visible_on_front' => false,
		'unique' => false,
		'is_configurable' => false,
		'used_for_promo_rules' => false
));

$installer->addAttribute('catalog_product', 'is_fws_permit_req',  array(
		'group' => 'Borderfree',
		'sort_order' => 21,
		'type' => 'int',
		'backend' => '',
		'frontend' => '',
		'label' => 'Fish and Wildlife Services permit required',
		'note' => '',
		'input' => 'select',
		'class' => '',
		'source' => 'eav/entity_attribute_source_boolean',
		'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
		'visible' => true,
		'required' => false,
		'user_defined' => true,
		'default' => '0',
		'visible_on_front' => false,
		'unique' => false,
		'is_configurable' => false,
		'used_for_promo_rules' => false
));

$installer->addAttribute('catalog_product', 'fws_permit_details',  array(
		'group' => 'Borderfree',
		'sort_order' => 22,
		'type' => 'varchar',
		'backend' => '',
		'frontend' => '',
		'label' => "Item's description for the FWS permit",
		'note' => '',
		'input' => 'text',
		'class' => '',
		'source' => '',
		'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
		'visible' => true,
		'required' => false,
		'user_defined' => true,
		'default' => '',
		'visible_on_front' => false,
		'unique' => false,
		'is_configurable' => false,
		'used_for_promo_rules' => false,
		'apply_to' => '',
		'searchable' => false,
		'filterable' => 0,
		'comparable' => false,
		'visible_in_advanced_search' => false,
		'used_for_price_rules' => false,
		'filterable_in_search' => false
));

$installer->endSetup();
?>