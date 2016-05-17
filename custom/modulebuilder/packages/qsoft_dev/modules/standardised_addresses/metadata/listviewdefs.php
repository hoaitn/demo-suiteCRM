<?php
$module_name = 'qsoft_standardised_addresses';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STREET' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STREET',
    'width' => '10%',
    'default' => true,
  ),
  'CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'STATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'POST_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POST_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'LONGITUDE' => 
  array (
    'type' => 'float',
    'label' => 'LBL_LONGITUDE',
    'width' => '10%',
    'default' => true,
  ),
  'LATITUDE' => 
  array (
    'type' => 'float',
    'label' => 'LBL_LATITUDE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
);
?>
