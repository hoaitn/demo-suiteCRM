<?php
$module_name='qsoft_standardised_addresses';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'qsoft_standardised_addresses',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'street' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_STREET',
      'width' => '10%',
      'default' => true,
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '10%',
      'default' => true,
    ),
    'state' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_STATE',
      'width' => '10%',
      'default' => true,
    ),
    'city' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CITY',
      'width' => '10%',
      'default' => true,
    ),
    'description' => 
    array (
      'type' => 'text',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'longitude' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_LONGITUDE',
      'width' => '10%',
      'default' => true,
    ),
    'latitude' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_LATITUDE',
      'width' => '10%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'qsoft_standardised_addresses',
      'width' => '5%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'qsoft_standardised_addresses',
      'width' => '4%',
      'default' => true,
    ),
  ),
);