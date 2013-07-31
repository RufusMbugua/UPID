<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="stations")
 */

class E_Stations {

	/**
	 * @Id
	 * @Column(name="station_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $station_id;

	/**
	 *  @Column(name="station_name", type="string", length=45, nullable=true)
	 * */
	private $station_name;

	/**
	 *  @Column(name="station_officers", type="string", length=45, nullable=true)
	 * */
	private $station_officers;

	/**
	 * Station Name
	 * */
	public function getStationName() {
		return $this ->station_name;
	}

	public function setStationID($station_name) {
		$this -> station_name = $station_name;
	}
	
		/**
	 * Station Officers
	 * */
	public function getStationOfficers() {
		return $this ->station_name;
	}

	public function setStationOfficers($station_officers) {
		$this -> station_officers = $station_officers;
	}



}
?>