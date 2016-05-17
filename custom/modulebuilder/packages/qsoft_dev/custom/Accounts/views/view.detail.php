<?php

require_once('include/MVC/View/views/view.detail.php');

class AccountsViewDetail extends ViewDetail{

	function AccountsViewDetail(){
		parent::ViewDetail();
	}

    function preDisplay() {
		parent:: preDisplay();
	}

    function display() {

		$account = $this->bean;

		$account->get_linked_beans('standardised_address_c','qsoft_standardised_addresses');
		$standardised_id = $account->qsoft_standardised_addresses_id_c;

		$standardised = BeanFactory::newBean('qsoft_standardised_addresses');
		$standardised->retrieve($standardised_id);

		if($standardised->longitude == 0){
			$standardised->longitude = "";
		}
		if($standardised->latitude == 0){
			$standardised->latitude = "";
		}

		$this->ss->assign('CUSTOM_LONGITUDE', $standardised->longitude);
		$this->ss->assign('CUSTOM_LATITUDE', $standardised->latitude);

		parent::display();
	}

}