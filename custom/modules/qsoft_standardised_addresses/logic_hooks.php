<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
	//Processing index. For sorting the array.
	1,

	//Label. A string value to identify the hook.
	'before_save example',

	//The PHP file where your class is located.
	'custom/modules/qsoft_standardised_addresses/logic_hooks_class.php',

	//The class the method is in.
	'logic_hooks_class',

	//The method to call.
	'before_save_method'
);

?>