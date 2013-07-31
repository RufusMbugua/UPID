<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Reports extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident = '';
	}
	function setReport($report_name) {
			$this -> theForm = new \models\Entities\E_Filed_Reports();
			$this -> theForm -> setReportTitle($_POST['report_title']);
			$this -> theForm -> setReportURL($report_name);
			$this -> theForm -> setDateModified(date('Y-m-d'));
			$this -> em -> persist($this -> theForm);
			$this -> em -> flush();
			$this -> em -> clear();
	}

}
