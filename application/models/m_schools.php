<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Schools extends MY_Model {

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
	function addschool()
	{
				//insert facility if new, else update the existing one
		
		$this -> theForm = new \models\Entities\E_Schools; //create an object of the model
		$this -> theForm -> setSchoolName($_POST['school_name']);		
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lastid=$this -> theForm->getSchoolID();
		//echo $lastid; exit;
		/*$this -> theForm = new \models\Entities\E_Poverty_Summary; //create an object of the model
		$this -> theForm -> setPsSchoolID($lastid);		
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();*/
	}


}

