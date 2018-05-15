<?php
class Vijaystore_Cmshelper_Helper_Data extends Mage_Core_Helper_Abstract
{


	/*- Call in Static Block / CMS page -*/
	/*- {{helper module="cmshelper" method="getStoreName" params="store" }} -*/ 
	public function getStoreName($param) {
		$store_name = Mage::getStoreConfig("general/store_information/name");
		$store_name = $store_name . $param;
		return $store_name;
	}	
}




