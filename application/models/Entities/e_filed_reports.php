<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="filed_reports")
 */

class E_Filed_Reports {
	/**
	 * @Id
	 * @Column(name="reportId", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $reportId;

	/**
	 *  @Column(name="reportTitle", type="string", length=255, nullable=false)
	 * */
	private $reportTitle;

	/**
	 *  @Column(name="reportUrl", type="string", length=255, nullable=false)
	 * */
	private $reportUrl;

	/**
	 *  @Column(name="dateModified", type="string", nullable=false)
	 * */
	private $dateModified;
	/**
	 *  @Column(name="active", type="string", nullable=false)
	 * */
	private $active;

	public function getReportID() {
		return $this -> reportId;
	}

	public function setReportID($reportId) {
		$this -> reportId = $reportId;
	}

	public function getReportTitle() {
		return $this -> reportTitle;
	}

	public function setReportTitle($reportTitle) {
		$this -> reportTitle = $reportTitle;
	}

	public function getReportURL() {
		return $this ->reportUrl;
	}

	public function setReportURL($reportUrl) {
		$this -> reportUrl = $reportUrl;
	}

	public function getDateModifed() {
		return $this -> dateModified;
	}

	public function setDateModified($dateModified) {
		$this -> dateModified = $dateModified;
	}
	
	public function getActive() {
		return $this -> active;
	}

	public function setActive($active) {
		$this -> active = $active;
	}

}
?>