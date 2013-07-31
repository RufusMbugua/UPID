<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="time")
 */

class E_Time {

	/**
	 * @Id
	 * @Column(name="time_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $time_id;
	/**
	 *  @Column(name="time_day", type="string", length=45, nullable=true)
	 * */
	private $time_day;

	/**
	 *  @Column(name="time_week", type="string", length=45, nullable=true)
	 * */
	private $time_week;
	/**
	 *  @Column(name="time_month", type="string", length=45, nullable=true)
	 * */
	private $time_month;
	/**
	 *  @Column(name="time_year", type="string", length=45, nullable=true)
	 * */
	private $time_year;

	/**
	 * Time ID
	 * */
	public function getTimeID() {
		return $this -> time_id;
	}

	public function setTimeID($time_id) {
		$this -> time_id = $time_id;
	}

	/**
	 * Time Day
	 * */
	public function getTimeDay() {
		return $this -> time_day;
	}

	public function setTimeDay($time_day) {
		$this -> time_day = $time_day;
	}

	/**
	 * Time Week
	 * */
	public function getTimeWeek() {
		return $this -> time_week;
	}

	public function setTimeWeek($time_week) {
		$this -> time_week = $time_week;
	}

	/**
	 * Time Month
	 * */
	public function getTimeMonth() {
		return $this -> time_month;
	}

	public function setTimeMonth($time_month) {
		$this -> time_month = $time_month;
	}

	/**
	 * Time Year
	 * */
	public function getTimeYear() {
		return $this -> time_year;
	}

	public function setTimeYear($time_year) {
		$this -> time_year = $time_year;
	}

}
?>