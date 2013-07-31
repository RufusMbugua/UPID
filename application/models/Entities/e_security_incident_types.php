<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="security_incident_types")
 */

class E_Security_Incident_Types {

	/**
	 * @Id
	 * @Column(name="incident_type_id", type="integer", length=50, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $incident_type_id;

	/**
	 *  @Column(name="incident_type_name", type="string", length=45, nullable=true)
	 * */
	private $incident_type_name;

	/**
	 * Incident Type ID
	 * */
	public function getIncidentTypeID() {
		return $this -> incident_type_id;
	}

	public function setIncidentTypeID($incident_type_id) {
		$this -> incident_type_id = $incident_type_id;
	}

	/**
	 * Incident Type Name
	 * */
	public function getIncidentTypeName() {
		return $this -> incident_type_name;
	}

	public function setIncidentTypeName($incident_type_name) {
		$this -> incident_type_name = $incident_type_name;
	}

}
?>