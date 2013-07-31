<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Poverty extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	function getSchools($county=false) {
	//Get schools
	try{		
	$schools = $this -> em -> createQuery('SELECT s.school_name FROM models\Entities\e_schools s');
	$this->schools=$schools->getResult();
	}catch(exception $ex){
		echo $ex->getMessage();
	}

	if ($schools) {
		
		echo '<pre>';
		print_r($this -> schools );
		echo '</pre>';
	}
}


}
