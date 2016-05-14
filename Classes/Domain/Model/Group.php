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

use \Volleyballserver\Championshipmanager\Domain\Model\Groupteams;
use \Volleyballserver\Championshipmanager\Domain\Model\Match;

/**
 * Gruppe
 */
class Group extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * Kurzname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $shortname = '';

	/**
	 * Zusatzinfos
	 *
	 * @var string
	 */
	protected $properties = '';

	/**
	 * matches
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Match>
	 * @cascade remove
	 */
	protected $matches = NULL;

	/**
	 * groupteams
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupteams>
	 * @cascade remove
	 */
	protected $groupteams = NULL;

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
		$this->matches = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->groupteams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the shortname
	 *
	 * @return string $shortname
	 */
	public function getShortname() {
		return $this->shortname;
	}

	/**
	 * Sets the shortname
	 *
	 * @param string $shortname
	 * @return void
	 */
	public function setShortname($shortname) {
		$this->shortname = $shortname;
	}

	/**
	 * Returns the properties
	 *
	 * @return string $properties
	 */
	public function getProperties() {
		return $this->properties;
	}

	/**
	 * Sets the properties
	 *
	 * @param string $properties
	 * @return void
	 */
	public function setProperties($properties) {
		$this->properties = $properties;
	}

	/**
	 * Adds a Match
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Match $match
	 * @return void
	 */
	public function addMatch(\Volleyballserver\Championshipmanager\Domain\Model\Match $match) {
		$this->matches->attach($match);
	}

	/**
	 * Removes a Match
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Match $matchToRemove The Match to be removed
	 * @return void
	 */
	public function removeMatch(\Volleyballserver\Championshipmanager\Domain\Model\Match $matchToRemove) {
		$this->matches->detach($matchToRemove);
	}

	/**
	 * Returns the matches
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Match> $matches
	 */
	public function getMatches() {
		return $this->matches;
	}

	/**
	 * Sets the matches
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Match> $matches
	 * @return void
	 */
	public function setMatches(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $matches) {
		$this->matches = $matches;
	}

	/**
	 * Adds a Groupteams
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteam
	 * @return void
	 */
	public function addGroupteam(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteam) {
		$this->groupteams->attach($groupteam);
	}

	/**
	 * Removes a Groupteams
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteamToRemove The Groupteams to be removed
	 * @return void
	 */
	public function removeGroupteam(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteamToRemove) {
		$this->groupteams->detach($groupteamToRemove);
	}

	/**
	 * Returns the groupteams
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupteams> $groupteams
	 */
	public function getGroupteams() {
		return $this->groupteams;
	}

	/**
	 * Sets the groupteams
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupteams> $groupteams
	 * @return void
	 */
	public function setGroupteams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $groupteams) {
		$this->groupteams = $groupteams;
	}

	/**
	 * calculate table
	 */
	public function calculateTable(){
		if ($this->groupteams){
			foreach ($this->groupteams as $team){
				$this->calulatePointsTeam($team);
			}

		}
	}

	/**
	 *
	 * @param Groupteams $team
	 */
	private function calulatePointsTeam(Groupteams $team){
		$team->reset();
		if($this->matches){
			foreach ($this->matches as $match){
				$this->addPointsMatchTeam($team, $match);
			}
		}
	}

	/**
	 *
	 * @param Groupteams $team
	 * @param Match $match
	 */
	private function addPointsMatchTeam(Groupteams $team, Match $match){
		if ($team === $match->getHometeam()){
			$this->addPointsMatchHomeTeam($team, $match);
		}
	}

	/**
	 *
	 * @param Groupteams $hometeam
	 * @param Match $match
	 */
	private function addPointsMatchHomeTeam(Groupteams $hometeam, Match $match){
		$hometeam->setPoints($hometeam->getPoints() + $match->getHomePoints());
		$hometeam->setWonballs($hometeam->getWonballs() + $match->getHomepointsTotal() );
		$hometeam->setWonsets($hometeam->getWonsets() + $match->getHomeWonSets());
		$hometeam->setLostballs($hometeam->getLostballs() + $match->getGuestpointsTotal() );
		$hometeam->setLostsets($hometeam->getLostsets() + $match->getGuestWonSets());
		$hometeam->setWonmatches($hometeam->getWonmatches() + $match->getHomeWon());
	}

	/**
	 *
	 * @param Groupteams $guestteam
	 * @param Match $match
	 */
	private function addPointsMatchGuestTeam(Groupteams $guestteam, Match $match){
		$guestteam->setPoints($guestteam->getPoints() + $match->getGuestPoints());
		$guestteam->setWonballs($guestteam->getWonballs() + $match->getGuestpointsTotal() );
		$guestteam->setWonsets($guestteam->getWonsets() + $match->getGuestWonSets());
		$guestteam->setLostballs($guestteam->getLostballs() + $match->getHomepointsTotal() );
		$guestteam->setLostsets($guestteam->getLostsets() + $match->getHomeWonSets());
		$guestteam->setWonmatches($guestteam->getWonmatches() + $match->getGuestWon());
	}


}