<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Incident extends MY_Model {
	var $incident_name;

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}

	function getIncidentNames() {
		$incident_name = $this -> em -> createQuery('SELECT c.security_incident_id,c.security_dor,c.security_reporter_contact,c.security_incident_description FROM models\Entities\e_security_incidences c');
		$this -> incident_name = $incident_name -> getResult();
		return $this -> incident_name;
	}

	function setIncident() {
		$this -> theForm = new \models\Entities\E_Security_Incidences();
		$this -> theForm -> setSecurityIncidentDOR($_POST['dor']);
		$this -> theForm -> setSecurityIncidentContact($_POST['full_name']);
		$this -> theForm -> setSecurityIncidentDescription($_POST['description']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$incident_name = $this -> theForm -> getSecurityIncidentID();
		$this -> em -> clear();
		$this -> theForm = new \models\Entities\E_Security_Summary();
		$this -> theForm -> setSSTime($_POST['dor']);
		$this -> theForm -> setSSIncidentType($_POST['incident_type']);
		$this -> theForm -> setSSLocation($_POST['location']);
		$this -> theForm -> setSSIncidentID($incident_name);
		$this -> theForm -> setSSCountyID($_POST['county']);
		$this -> theForm -> setSSConstituencyID($_POST['constituency']);
		$this -> theForm -> setSSStationID($_POST['station']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	function updateIncident() {
		$incident_name = $this -> em -> getRepository('models\Entities\E_Security_Summary') -> findOneBy(array('ss_id' => $this->input->post('summary_id')));
		if($incident_name){
		$incident_name -> setSSTime($_POST['dor']);
		$incident_name -> setSSIncidentType($_POST['incident_type']);
		$incident_name -> setSSLocation($_POST['location']);
		$incident_name -> setSSIncidentID($_POST['incident_id']);
		$incident_name -> setSSCountyID($_POST['county']);
		$incident_name -> setSSConstituencyID($_POST['constituency']);
		$incident_name -> setSSStationID($_POST['station']);
		$this -> em -> persist($incident_name);
		$this -> em -> flush();
		$this -> em -> clear();
		}
		if($incident_name){
		$incident_name = $this -> em -> getRepository('models\Entities\e_security_incidences') -> findOneBy(array('security_incident_id' => $_POST['incident_id']));
		$incident_name -> setSecurityIncidentDOR($_POST['dor']);
		$incident_name -> setSecurityIncidentContact($_POST['full_name']);
		$incident_name -> setSecurityIncidentDescription($_POST['description']);
		$this -> em -> persist($incident_name);
		$this -> em -> flush();
		}
		redirect("c_incident/getIncident/" . $_POST['summary_id']);
	}

}
