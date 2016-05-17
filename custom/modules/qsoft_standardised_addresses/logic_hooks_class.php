<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logic_hooks_class
{
	function before_save_method($bean, $event, $arguments)
	{
		$temp = "";
		if($bean->street) {
			$temp = $bean->street.', ';
		}
		if($bean->city) {
			$temp = $temp.$bean->city.', ';
		}
		if($bean->state) {
			$temp = $temp.$bean->state.', ';
		}
		if($bean->post_code) {
			$temp = $temp.$bean->post_code.', ';
		}
		if($bean->country) {
			$temp = $temp.$bean->country;
		}

		$bean->name = $temp;
	}
}

?>