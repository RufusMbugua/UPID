<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="poverty_summary")
 */

class E_Poverty_Summary {
	/**
	 * @Id
	 * @Column(name="ps_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $ps_id;
	
	public function getPsID() {
		return $this -> ps_id;
	}

	public function setPsID($ps_id) {
		$this -> ps_id = $ps_id;
	}
	/**
	 *  @Column(name="ps_school_id", type="integer", length=45, nullable=false)
	 * */
	private $ps_school_id;
	
	public function getPsSchoolID() {
	return $this -> ps_school_id;
	}

	public function setPsSchoolID($ps_school_id) {
		$this -> ps_school_id = $ps_school_id;
	}
	/**
	 *  @Column(name="ps_enrolment_id", type="integer", length=45, nullable=false)
	 * */
	private $ps_enrolment_id;
	
	public function getPsEnrolmentID() {
		return $this -> ps_enrolment_id;
	}

	public function setPsEnrolmentID($ps_enrolment_id) {
		$this -> ps_enrolment_id = $ps_enrolment_id;
	}
	/**
	 *  @Column(name="ps_life_id", type="integer", length=45, nullable=false)
	 * */
	private $ps_life_id;
	
	public function getPsLifeID() {
		return $this -> ps_life_id;
	}

	public function setPsLifeID($ps_life_id) {
		$this -> ps_life_id = $ps_life_id;
	}
	
	/**
	 *  @Column(name="ps_income_id", type="integer", length=45, nullable=false)
	 * */
	private $ps_income_id;
	/**
	 * Poverty Summary ID
	 * */
	public function getIncomeID() {
		return $this -> ps_income_id;
	}

	public function setIncomeID($ps_id) {
		$this -> ps_income_id = $ps_income_id;
	}
	
	


}
?>