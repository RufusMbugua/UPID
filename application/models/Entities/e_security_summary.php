<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="security_summary")
 */

class E_Security_Summary {
	/**
	 * @Id
	 * @Column(name="ss_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $ss_id;
	
	/**
	 *  @Column(name="ss_time_id", type="string", length=45, nullable=true)
	 * */
	private $ss_time_id;
	
	/**
	 *  @Column(name="ss_incident_type", type="integer", length=45, nullable=true)
	 * */
	private $ss_incident_type;
	/**
	 *  @Column(name="ss_location_id", type="integer", length=45, nullable=true)
	 * */
	private $ss_location_id;
	/**
	 *  @Column(name="ss_incident_id", type="integer", length=45, nullable=true)
	 * */
	private $ss_incident_id;
	/**
	 *  @Column(name="ss_county_id", type="integer", length=45, nullable=true)
	 * */
	private $ss_county_id;
	/**
	 *  @Column(name="ss_constituency_id", type="integer", length=45, nullable=true)
	 * */
	private $ss_constituency_id;
	/**
	 *  @Column(name="ss_station_id", type="integer", length=45, nullable=true)
	 * */
	private $ss_station_id;
	/**
	 * Security Summary ID
	 * */
	public function getSSID() {
		return $this -> ss_id;
	}

	public function setSSID($ss_id) {
		$this -> ss_id = $ss_id;
	}

	/**
	 * Security Summary Time
	 * */
	public function getSSTime() {
		return $this -> ss_time_id;
	}

	public function setSSTime($ss_time_id) {
		$this -> ss_time_id = $ss_time_id;
	}
	
		/**
	 * Security Summary Incident Type
	 * */
	public function getSSIncidentType() {
		return $this ->ss_incident_type;
	}

	public function setSSIncidentType($ss_incident_type) {
		$this ->ss_incident_type = $ss_incident_type;
	}

	/**
	 * Security Summary Location
	 * */
	public function getSSLocation() {
		return $this -> ss_location_id;
	}

	public function setSSLocation($ss_location_id) {
		$this -> ss_location_id = $ss_location_id;
	}

	/**
	 * Security Summary Incident
	 * */
	public function getSSIncidentID() {
		return $this -> ss_incident_id;
	}

	public function setSSIncidentID($ss_incident_id) {
		$this -> ss_incident_id = $ss_incident_id;
	}

	/**
	 * Security Summary County
	 * */
	public function getSSCountyID() {
		return $this -> ss_county_id;
	}

	public function setSSCountyID($ss_county_id) {
		$this ->ss_county_id = $ss_county_id;
	}

	/**
	 * Security Summary Constituency
	 * */
	public function getSSConstituencyID() {
		return $this ->ss_constituency_id;
	}

	public function setSSConstituencyID($ss_constituency_id) {
		$this ->ss_constituency_id = $ss_constituency_id;
	}

	/**
	 * Security Summary Station
	 * */
	public function getSSStationID() {
		return $this ->ss_station_id;
	}

	public function setSSStationID($ss_station_id) {
		$this ->ss_station_id = $ss_station_id;
	}

}
?>