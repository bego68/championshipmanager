<?php
namespace Volleyballserver\Championshipmanager\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Berti Golf <berti@golf-net.de>, Volleyballserver
 *           Max Rosenmüller
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Mannschaften einer Grppe
 */
class Groupteams extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Nummer
	 *
	 * @var integer
	 */
	protected $number = 0;

	/**
	 * Platzierung in Herkinftsgruppe
	 *
	 * @var integer
	 */
	protected $groupfromranking = 0;

	/**
	 * Platzierung
	 *
	 * @var integer
	 */
	protected $ranking = 0;

	/**
	 * Punkte
	 *
	 * @var integer
	 */
	protected $points = 0;

	/**
	 * Sätze
	 *
	 * @var integer
	 */
	protected $wonsets = 0;

	/**
	 * Sätze
	 *
	 * @var integer
	 */
	protected $lostsets = 0;

	/**
	 * Bälle
	 *
	 * @var integer
	 */
	protected $wonballs = 0;

/**
	 * Bälle
	 *
	 * @var integer
	 */
	protected $lostballs = 0;

	/**
	 * gewonnene Spiele
	 *
	 * @var integer
	 */
	protected $wonmatches = 0;

	/**
	 * Eigenschaften
	 *
	 * @var integer
	 */
	protected $properties = 0;

	/**
	 * Team
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Team
	 */
	protected $team = NULL;

	/**
	 * kommt aus Gruppe
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\TxGroup
	 */
	protected $groupfrom = NULL;

	/**
	 * Returns the number
	 *
	 * @return integer $number
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * Sets the number
	 *
	 * @param integer $number
	 * @return void
	 */
	public function setNumber($number) {
		$this->number = $number;
	}

	/**
	 * Returns the groupfromranking
	 *
	 * @return integer $groupfromranking
	 */
	public function getGroupfromranking() {
		return $this->groupfromranking;
	}

	/**
	 * Sets the groupfromranking
	 *
	 * @param integer $groupfromranking
	 * @return void
	 */
	public function setGroupfromranking($groupfromranking) {
		$this->groupfromranking = $groupfromranking;
	}

	/**
	 * Returns the ranking
	 *
	 * @return integer $ranking
	 */
	public function getRanking() {
		return $this->ranking;
	}

	/**
	 * Sets the ranking
	 *
	 * @param integer $ranking
	 * @return void
	 */
	public function setRanking($ranking) {
		$this->ranking = $ranking;
	}

	/**
	 * Returns the won balls
	 *
	 * @return integer $wonballs
	 */
	public function getWonballs() {
		return $this->wonballs;
	}

	/**
	 * Sets the won balls
	 *
	 * @param integer $wonballs
	 * @return void
	 */
	public function setWonballs($wonballs) {
		$this->wonballs = $wonballs;
	}

	/**
	 * Sets the lost balls
	 *
	 * @param integer $lostballs
	 * @return void
	 */
	public function setLostballs($lostballs) {
		$this->lostballs = $lostballs;
	}

	/**
	 * Returns the lost balls
	 *
	 * @return integer $lostballs
	 */
	public function getLostballs() {
		return $this->lostballs;
	}

	/**
	 * Returns the won wonmatches
	 *
	 * @return integer $wonmatches
	 */
	public function getWonmatches() {
		return $this->wonmatches;
	}

	/**
	 * Sets the won matches
	 *
	 * @param integer $wonmatches
	 * @return void
	 */
	public function setWonmatches($wonmatches) {
		$this->wonmatches = $wonmatches;
	}



	/**
	 * Returns the wonsets
	 *
	 * @return integer $wonsets
	 */
	public function getWonsets() {
		return $this->wonsets;
	}

	/**
	 * Sets the wonsets
	 *
	 * @param integer $wonsets
	 * @return void
	 */
	public function setWonsets($wonsets) {
		$this->wonsets = $wonsets;
	}

	/**
	 * Returns the lostsets
	 *
	 * @return integer $lostsets
	 */
	public function getLostsets() {
		return $this->lostsets;
	}

	/**
	 * Sets the lost sets
	 *
	 * @param integer $lostsets
	 * @return void
	 */
	public function setLostsets($lostsets) {
		$this->lostsets = $lostsets;
	}

	/**
	 * Returns the points
	 *
	 * @return integer $points
	 */
	public function getPoints() {
		return $this->points;
	}

	/**
	 * Sets the points
	 *
	 * @param integer $points
	 * @return void
	 */
	public function setPoints($points) {
		$this->points = $points;
	}

	/**
	 * Returns the properties
	 *
	 * @return integer $properties
	 */
	public function getProperties() {
		return $this->properties;
	}

	/**
	 * Sets the properties
	 *
	 * @param integer $properties
	 * @return void
	 */
	public function setProperties($properties) {
		$this->properties = $properties;
	}

	/**
	 * Returns the team
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Team $team
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * Sets the team
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Team $team
	 * @return void
	 */
	public function setTeam(\Volleyballserver\Championshipmanager\Domain\Model\Team $team) {
		$this->team = $team;
	}

	/**
	 * Returns the groupfrom
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\TxGroup $groupfrom
	 */
	public function getGroupfrom() {
		return $this->groupfrom;
	}

	/**
	 * Sets the groupfrom
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\TxGroup $groupfrom
	 * @return void
	 */
	public function setGroupfrom(\Volleyballserver\Championshipmanager\Domain\Model\TxGroup $groupfrom) {
		$this->groupfrom = $groupfrom;
	}

	public function reset(){
		$this->lostballs = 0;
		$this->lostsets = 0;
		$this->wonballs = 0;
		$this->wonsets = 0;
		$this->wonmatches = 0;
		$this->ranking = 1;
		$this->points = 0;
	}

	public function getSetQuotient(){
		if ($this->lostsets>0){
			return number_format($this->wonsets / $this->lostsets,3,",",".");
		}

		return 'max';
	}

	public function getBallQuotient(){
		if ($this->lostballs>0){
			return number_format($this->wonballs / $this->lostballs,3,",",".");
		}

		return 'max';
	}
}