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
 * Tournament
 */
class Tournament extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * gender
	 *
	 * @var integer
	 */
	protected $gender = 0;

	/**
	 * begin
	 *
	 * @var \DateTime
	 */
	protected $begin = NULL;

	/**
	 * end
	 *
	 * @var \DateTime
	 */
	protected $end = NULL;

	/**
	 * type
	 *
	 * @var string
	 */
	protected $type = '';

	/**
	 * Halle
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Sportshall>
	 * @cascade remove
	 */
	protected $sportshall = NULL;

	/**
	 * teams
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Team>
	 * @cascade remove
	 */
	protected $teams = NULL;

	/**
	 * matchplan
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Matchplan
	 */
	protected $matchplan = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->sportshall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->teams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the gender
	 *
	 * @return integer $gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Sets the gender
	 *
	 * @param integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Returns the begin
	 *
	 * @return \DateTime $begin
	 */
	public function getBegin() {
		return $this->begin;
	}

	/**
	 * Sets the begin
	 *
	 * @param \DateTime $begin
	 * @return void
	 */
	public function setBegin(\DateTime $begin) {
		$this->begin = $begin;
	}

	/**
	 * Returns the end
	 *
	 * @return \DateTime $end
	 */
	public function getEnd() {
		return $this->end;
	}

	/**
	 * Sets the end
	 *
	 * @param \DateTime $end
	 * @return void
	 */
	public function setEnd(\DateTime $end) {
		$this->end = $end;
	}

	/**
	 * Returns the type
	 *
	 * @return string $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Adds a Sportshall
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Sportshall $sportshall
	 * @return void
	 */
	public function addSportshall(\Volleyballserver\Championshipmanager\Domain\Model\Sportshall $sportshall) {
		$this->sportshall->attach($sportshall);
	}

	/**
	 * Removes a Sportshall
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Sportshall $sportshallToRemove The Sportshall to be removed
	 * @return void
	 */
	public function removeSportshall(\Volleyballserver\Championshipmanager\Domain\Model\Sportshall $sportshallToRemove) {
		$this->sportshall->detach($sportshallToRemove);
	}

	/**
	 * Returns the sportshall
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Sportshall> $sportshall
	 */
	public function getSportshall() {
		return $this->sportshall;
	}

	/**
	 * Sets the sportshall
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Sportshall> $sportshall
	 * @return void
	 */
	public function setSportshall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sportshall) {
		$this->sportshall = $sportshall;
	}

	/**
	 * Adds a Team
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Team $team
	 * @return void
	 */
	public function addTeam(\Volleyballserver\Championshipmanager\Domain\Model\Team $team) {
		$this->teams->attach($team);
	}

	/**
	 * Removes a Team
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Team $teamToRemove The Team to be removed
	 * @return void
	 */
	public function removeTeam(\Volleyballserver\Championshipmanager\Domain\Model\Team $teamToRemove) {
		$this->teams->detach($teamToRemove);
	}

	/**
	 * Returns the teams
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Team> $teams
	 */
	public function getTeams() {
		return $this->teams;
	}

	/**
	 * Sets the teams
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Team> $teams
	 * @return void
	 */
	public function setTeams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $teams) {
		$this->teams = $teams;
	}

	/**
	 * Returns the matchplan
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Matchplan $matchplan
	 */
	public function getMatchplan() {
		return $this->matchplan;
	}

	/**
	 * Sets the matchplan
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Matchplan $matchplan
	 * @return void
	 */
	public function setMatchplan(\Volleyballserver\Championshipmanager\Domain\Model\Matchplan $matchplan) {
		$this->matchplan = $matchplan;
	}

}