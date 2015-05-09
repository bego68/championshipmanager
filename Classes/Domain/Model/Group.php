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
 * Group
 */
class Group extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Groupteams
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
	 * Returns the groupteams
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteams
	 */
	public function getGroupteams() {
		return $this->groupteams;
	}

	/**
	 * Sets the groupteams
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteams
	 * @return void
	 */
	public function setGroupteams(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteams) {
		$this->groupteams = $groupteams;
	}

}