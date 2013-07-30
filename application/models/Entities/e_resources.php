<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="resources")
 */

class E_Resources{
	/**
	 * @Id
	 * @Column(name="resourceId", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	 private $resourceId;

	/**
	 *  @Column(name="resourceName", type="string", length=255, nullable=false)
	 * */
	private $resourceName;
	
	
   
	public function getResourceID() {
		return $this ->resourceId;
	}

	public function setResourceID($resourceId) {
		$this ->resourceId= $resourceId;
	}

	public function getResourceName() {
		return $this ->resourceName;
	}

	public function setResourceName($resourceName) {
		 $this -> resourceName = $resourceName;
	}
	
}
?>