<?php

class C_Reports extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> helper(array('form'));
		$this -> load -> library('upload');
	}

	public function index() {

	}

	public function addReport() {
		$data['title'] = 'Add Report';
		$data['contentView'] = 'add_report_v';
		$this -> load -> view('template', $data);
	}

	public function setReport() {
		if ($_FILES['file']['tmp_name']) {
			$config['upload_path'] = '././reports/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '1000000000';
			$this -> upload -> initialize($config);
			if ($this -> upload -> do_upload('file')) {
				$data = $this -> upload -> data();
				$this -> load -> model('m_reports');
				$this -> m_reports -> setReport($data['file_name']);
				$this -> session -> set_userdata("msg_success", $data['file_name'] . " was uploaded successfully");
			} else {
				$this -> session -> set_userdata("msg_error", $this -> upload -> display_errors());
			}
			redirect("c_reports/addReport");
		}
	}

	public function updateReport($id) {
		$title = $this -> input -> post("report_title");
		$modified = date('Y-m-d');
		$url = $this -> input -> post("last_url");
		$this -> session -> set_userdata("msg_success", "Report No:<b> " . $title . "</b> was uploaded successfully");
		if ($_FILES['file']['tmp_name']) {
			$config['upload_path'] = '././reports/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '1000000000';
			$this -> upload -> initialize($config);
			if ($this -> upload -> do_upload('file')) {
				$data = $this -> upload -> data();
				$last_file = $data['file_path'] . $url;
				unlink($last_file);
				$url = $data['file_name'];
			} else {
				$this -> session -> set_userdata("msg_error", $this -> upload -> display_errors());
			}
		}
		$sql = "update filed_reports fr set fr.reportTitle='$title',fr.dateModified='$modified',fr.reportUrl='$url' WHERE fr.reportID ='$id'";
		$query = $this -> db -> query($sql);
		redirect("c_reports/getReport/" . $id);
	}

	public function getReport($id) {
		$sql = "SELECT * FROM filed_reports fr WHERE fr.reportID ='$id'";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		if ($results) {
			$data['results'] = $results;
		}
		$data['title'] = 'View Report';
		$data['contentView'] = 'view_report_v';
		$this -> load -> view('template', $data);
	}

	public function enable($id) {
		$sql = "update filed_reports fr set fr.active='1' WHERE fr.reportID ='$id'";
		$query = $this -> db -> query($sql);
		redirect("c_front");
	}
	public function disable($id) {
		$sql = "update filed_reports fr set fr.active='0' WHERE fr.reportID ='$id'";
		$query = $this -> db -> query($sql);
		redirect("c_front");
	}

}
?>