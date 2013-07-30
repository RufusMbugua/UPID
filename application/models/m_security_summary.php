<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Security_Summary extends MY_Model {
	var $incident_name;

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}

	function getSummary() {
		$incident_name = $this -> em -> createQuery('SELECT c FROM models\Entities\e_security_summary c');
		$this -> incident_name = $incident_name -> getResult();
		return $this -> incident_name;
	}
}
