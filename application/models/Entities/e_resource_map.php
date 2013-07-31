<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="e_resource_map")
 */
 class E_Resource_Map {  
  
   /**
	* @Id
	* @Column(name="resourceMapId", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $resourceMapId;


   /**
	* @ManyToOne(targetEntity="resources", inversedBy="resourceId")
    * @Column(name="resourceId", type="integer", length=11, nullable=false)
	* */
	private $resourceId;

	/**
	* @ManyToOne(targetEntity="counties", inversedBy="county_id")
    * @Column(name="locationId", type="integer", length=11, nullable=false)
	* */
	private $locationId;

	/**
	* @Column(name="resourceCount", type="integer", length=11, nullable=false)
	* */
	private $resourceCount;


	/**
	* @Column(name="dateCreated", type="datetime", nullable=false)
	* */
	private $dateCreated;



	public function getResourceMapID() {
			return $this -> resourceMapId;
	}

	public function setResourceMapID($resourceMapId) { $this -> resourceMapId = $resourceMapId;
	}
	
	public function getResourceID() {
			return $this -> resourceId;
	}

	public function setResourceID($resourceId) { $this -> resourceId = $resourceId;
	}
	
	public function getLocationID() {
			return $this -> locationId;
	}

	public function setLocationID($locationId) { $this -> locationId = $locationId;
	}

	public function getResourceCount() {
			return $this -> resourceCount;
	}

	public function setResourceCount($resourceCount) { $this -> resourceCount = $resourceCount;
	}


	public function getDateCreated() {
			return $this -> dateCreated;
	}

	public function setDateCreated($dateCreated) { $this ->dateCreated = $dateCreated;
	}
}
?>