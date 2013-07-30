<?php

class C_Front extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
	}

	public function index() {
		$data['contentView'] = "index";
		$data['title'] = "Home";
		$data['graphTitle'] = 'poverty trends';
		$data['reports'] = 'poverty reports';
		$data['summaries'] = $this -> alerts_listing();
		$data['filed_reports'] = $this -> report_listing();
		$data['resource_reports'] = $this -> resource_listing();
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

	public function alerts_listing() {
		$dyn_table = "";
		$sql = "SELECT * FROM security_summary ss LEFT JOIN security_incident_types st ON ss.ss_incident_type=st.incident_type_id LEFT JOIN counties c ON c.county_id=ss.ss_county_id LEFT JOIN counties c1 ON c1.county_id=ss.ss_location_id LEFT JOIN constituencies cs ON ss.ss_constituency_id=cs.constituency_id LEFT JOIN stations s ON s.station_id=ss.ss_station_id LEFT JOIN security_incidencies si ON si.security_incident_id=ss.ss_incident_id GROUP BY ss.ss_id";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$dyn_table .= "<table class='table table-bordered' style='font-size:11px;'><thead style='background:#DDD;'><tr><th>Alert</th><th>Zone</th><th>Time</th><th>Content</th></tr></thead><tbody>";
		if ($results) {
			foreach ($results as $result) {
				$dyn_table .= "<tr><td nowrap='nowrap'>" . $result['incident_type_name'] . "</td><td>" . $result['constituency_name'] . "</td><td nowrap='nowrap'>" . date('d-M-Y', strtotime($result['ss_time_id'])) . "</td><td><a href='" . base_url() . 'c_incident/getIncident/' . $result['ss_id'] . "'>" . $result['security_incident_description'] . "</a></td></tr>";
			}
		} else {
			$dyn_table .= "";
		}
		$dyn_table .= "</tbody></table>";
		return $dyn_table;
	}

	public function report_listing() {
		$dyn_table = "";
		$sql = "SELECT * FROM filed_reports";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$dyn_table .= "<table class='table table-bordered' style='font-size:11px;'><thead style='background:#DDD;'><tr><th>Report Name</th><th>Modified</th><th colspan='2'>Options</th></tr></thead><tbody>";
		if ($results) {
			foreach ($results as $result) {
				if ($result['active'] == 1) {
					$options = "<a href='" . base_url() . "c_reports/disable/" . $result['reportID'] . "' class='red'>Disable</a>";
				} else {
					$options = "<a href='" . base_url() . "c_reports/enable/" . $result['reportID'] . "' class='green'>Enable</a>";
				}

				$dyn_table .= "<tr><td><a href='" . base_url() . "reports/" . $result['reportUrl'] . "'>" . strtoupper($result['reportTitle']) . "</a></td><td>" . date('d-M-Y', strtotime($result['dateModified'])) . "</td><td><a href='" . base_url() . "c_reports/getReport/" . $result['reportID'] . "'>Details</a></td><td>$options</td></tr>";
			}
		} else {
			$dyn_table .= "";
		}
		$dyn_table .= "</tbody></table>";
		return $dyn_table;
	}

	public function resource_listing() {
		$dyn_table = "";
		$sql = "SELECT r.resourceName, SUM( rm.resourceCount ) AS total, rm.dateCreated FROM  `resource_map` rm,  `resources` r WHERE r.resourceId = rm.resourceId GROUP BY r.resourceId";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$dyn_table .= "<table class='table table-bordered' style='font-size:11px;'><thead style='background:#DDD;'><tr><th>Resource Name</th><th>Status</th><th colspan='2'>Total</th></tr></thead><tbody>";
		if ($results) {
			foreach ($results as $result) {
				if ($result['total']>50) {
					$options = "<span class='green'><b>H</b></span>";
				} else {
					$options = "<span class='red'><b>L</b></span>";
				}

				$dyn_table .= "<tr><td>".$result['resourceName']."</td><td>".$options."</td><td>".$result['total']."</td></tr>";
			}
		} else {
			$dyn_table .= "";
		}
		$dyn_table .= "</tbody></table>";
		return $dyn_table;

	}

}
?>
