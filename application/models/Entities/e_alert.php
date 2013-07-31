<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="alert")
 */
 class E_Alert {  
  
   /**
	* @Id
	* @Column(name="alertId", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $alertId;

    /**
	* @ManyToOne(targetEntity="counties", inversedBy="county_id")
	* @Column(name="alertType", type="integer", length=11, nullable=false)
	* */
	private $alertType;

	/**
    * @Column(name="alertDateTime", type="datetime", nullable=false)
	* */
	private $alertDateTime;
	
	/**
    * @Column(name="alertContent", type="text", nullable=false)
	* */
	private $alertContent;
	
	/**
	* @ManyToOne(targetEntity="counties", inversedBy="county_id")
    * @Column(name="alertLocation", type="integer", length=11, nullable=false)
	* */
	private $alertLocation;
	

	public function getAlertID() {
			return $this -> alertID;
	}

	public function setAlertID($alertID) { $this -> alertID = $alertID;
	}
	
	public function getAlertType() {
			return $this -> alertType;
	}

	public function setAlertType($alertType) { $this -> alertType = $alertType;
	}
	
	public function getAlertDateTime() {
			return $this -> alertDateTime;
	}

	public function setAlertDateTime($alertDateTime) { $this -> alertDateTime = $alertDateTime;
	}

	public function getAlertContent() {
			return $this -> alertContent;
	}

	public function setAlertContent($alertContent) { $this -> alertContent = $alertContent;
	}
	
	public function getAlertLocation() {
			return $this -> alertLocation;
	}

	public function setAlertLocation($alertLocation) { $this -> alertLocation = $alertLocation;
	}

}
?>