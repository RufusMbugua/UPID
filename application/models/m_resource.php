<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Resource extends MY_Model {
	var $county_name;

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}

	function getResources() {
		$county_name = $this -> em -> createQuery('SELECT c FROM models\Entities\e_resources c');
		$this -> county_name = $county_name -> getResult();
		return $this -> county_name;
	}

	function setResource() {
		$this -> theForm = new \models\Entities\E_Resource_Map();
		$this -> theForm -> setResourceID($this->input->post("resource_list"));
		$this -> theForm -> setLocationID($this->input->post("location"));
		$this -> theForm -> setResourceCount($this->input->post("resource_count"));
		$this -> theForm -> setDateCreated(date('Y-m-d'));
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
	}

}
