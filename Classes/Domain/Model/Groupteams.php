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
	protected $sets = 0;

	/**
	 * Bälle
	 *
	 * @var integer
	 */
	protected $balls = 0;

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
	 * Returns the sets
	 *
	 * @return integer $sets
	 */
	public function getSets() {
		return $this->sets;
	}

	/**
	 * Sets the sets
	 *
	 * @param integer $sets
	 * @return void
	 */
	public function setSets($sets) {
		$this->sets = $sets;
	}

	/**
	 * Returns the balls
	 *
	 * @return integer $balls
	 */
	public function getBalls() {
		return $this->balls;
	}

	/**
	 * Sets the balls
	 *
	 * @param integer $balls
	 * @return void
	 */
	public function setBalls($balls) {
		$this->balls = $balls;
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

}