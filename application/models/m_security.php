<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Security extends MY_Model {
	var $county_name;

	function __construct() {
		parent::__construct();
		$this -> county_name = '';
	}

	function getCountyNames() {
		//Get Repository of Counties
		try{
		//$county_name = $this -> em -> getRepository('models\Entities\e_counties') -> findAll();
		$county_name = $this -> em -> createQuery('SELECT c.county_name FROM models\Entities\e_counties c');
		$this->county_name=$county_name->getResult();
		}catch(exception $ex){
			echo $ex->getMessage();
		}

		if ($county_name) {
			return($county_name );
		}
	}

}
