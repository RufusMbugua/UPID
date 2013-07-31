<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="constituencies")
 */

class E_Constituencies {

	/**
	 * @Id
	 * @Column(name="constituency_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $constituency_id;

	/**
	 *  @Column(name="constituency_name", type="string", length=45, nullable=true)
	 * */
	private $constituency_name;

	/**
	 *Constituency ID
	 * */
	public function getConstituencyID() {
		return $this -> constituency_id;
	}

	public function setConstituencyID($constituency_id) {
		$this -> constituency_id = $constituency_id;
	}

	/**
	 *Constituency Name
	 * */
	public function getConstituencyName() {
		return $this -> constituency_id;
	}

	public function setConstituencyName($constituency_name) {
		$this ->constituency_name = $constituency_name;
	}

}
?>