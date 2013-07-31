<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="school_enrolments")
 */

class E_School_Enrolments{

	/**
	 * @Id
	 * @Column(name="se_id", type="integer", length=50, nullable=false)
	 * * @GeneratedValue(strategy="AUTO")
	 * */
	private $se_id;

	/**
	 *  @Column(name="se_enrolments", type="string", length=45, nullable=true)
	 * */
	private $se_name;
	
    /**
	 * School ID
	 * */
	public function getEnrolmentID() {
		return $this ->se_id;
	}

	public function setEnrolmentID($se_id) {
		$this ->se_id = $se_id;
	}

    /*
	 * School Name
	 * */
	public function getEnrolments() {
		return $this ->se_enrolments;
	}

	public function setEnrolments($se_enrolments) {
		 $this -> se_enrolments = $se_enrolments;
	}

}
?>