<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="counties")
 */

class E_Counties{

	/**
	 * @Id
	 * @Column(name="county_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $county_id;

	/**
	 *  @Column(name="county_name", type="string", length=45, nullable=true)
	 * */
	private $county_name;
	
    /**
	 * County ID
	 * */
	public function getCountyID() {
		return $this ->county_id;
	}

	public function setCountyID($county_id) {
		$this ->county_id = $county_id;
	}

    /*
	 * County Name
	 * */
	public function getCountyName() {
		return $this ->county_name;
	}

	public function setCountyName($county_name) {
		 $this -> county_name = $county_name;
	}

}
?>