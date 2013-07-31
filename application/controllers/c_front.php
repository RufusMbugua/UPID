<?php

class C_Front extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> database();
	}

	public function index() {
		$data['contentView'] = "index";
		$data['title'] = "Home";
		$data['graphTitle'] = 'poverty trends';
		$data['reports'] = 'poverty reports';
		$data['summaries'] = $this -> listing();
		$this -> load -> view('template', $data);
	}

	public function crime() {
		$data['contentView'] = "index";
		$data['title'] = "Home";
		$data['graphTitle'] = 'crime trends';
		$data['reports'] = 'crime reports';
		$this -> load -> view('template', $data);
	}

	public function incidents() {
		$data['contentView'] = "index";
		$data['title'] = "Home";
		$this -> load -> view('template', $data);
	}

	public function listing() {
		$dyn_table = "";
		$sql = "SELECT * FROM security_summary ss LEFT JOIN security_incident_types st ON ss.ss_incident_type=st.incident_type_id LEFT JOIN counties c ON c.county_id=ss.ss_county_id LEFT JOIN counties c1 ON c1.county_id=ss.ss_location_id LEFT JOIN constituencies cs ON ss.ss_constituency_id=cs.constituency_id LEFT JOIN stations s ON s.station_id=ss.ss_station_id LEFT JOIN security_incidencies si ON si.security_incident_id=ss.ss_incident_id GROUP BY ss.ss_id";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$dyn_table.="<table class='table table-bordered'><thead style='background:#DDD;'><tr><th>Alert</th><th>Zone</th><th>Time</th><th>Content</th></tr></thead><tbody>";
		if ($results) {
			foreach ($results as $result) {
                $dyn_table.="<tr><td>".$result['incident_type_name']."</td><td>".$result['constituency_name']."/".$result['county_name']."</td><td>".date('d-M-Y',strtotime($result['ss_time_id']))."</td><td><a href='".base_url().'c_incident/getIncident/'.$result['ss_id']."'>".$result['security_incident_description']."</a></td></tr>";
			}
		}else{
			$dyn_table.="";
		}
		$dyn_table.="</tbody></table>";
		return $dyn_table;
	}

}
?>
