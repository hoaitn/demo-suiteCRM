<?php
$module_name = 'qsoft_Standardised_Addresses';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'street',
            'label' => 'LBL_STREET',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'city',
            'label' => 'LBL_CITY',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'postal_code',
            'label' => 'LBL_POSTAL_CODE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'label' => 'LBL_STATE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'country',
            'label' => 'LBL_COUNTRY',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'longitude',
            'label' => 'LBL_LONGITUDE',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'latitude',
            'label' => 'LBL_LATITUDE',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
