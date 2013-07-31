<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="schools")
 */
class E_Schools{

	/**
	 * @Id
	 * @Column(name="school_id", type="integer", length=50, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $school_id;

	/**
	 *  @Column(name="school_name", type="string", length=45, nullable=true)
	 * */
	private $school_name;
	
    /**
	 * School ID
	 * */
	public function getSchoolID() {
		return $this ->school_id;
	}

	public function setSchoolID($school_id) {
		$this ->school_id = $school_id;
	}

    /*
	 * School Name
	 * */
	public function getSchoolName() {
		return $this ->school_name;
	}

	public function setSchoolName($school_name) {
		 $this -> school_name = $school_name;
	}

}
?>