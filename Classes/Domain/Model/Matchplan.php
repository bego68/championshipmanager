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
 * Spielplam
 */
class Matchplan extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * Runden
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Tournround>
	 * @cascade remove
	 */
	protected $rounds = NULL;

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
		$this->rounds = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Adds a Tournround
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Tournround $round
	 * @return void
	 */
	public function addRound(\Volleyballserver\Championshipmanager\Domain\Model\Tournround $round) {
		$this->rounds->attach($round);
	}

	/**
	 * Removes a Tournround
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Tournround $roundToRemove The Tournround to be removed
	 * @return void
	 */
	public function removeRound(\Volleyballserver\Championshipmanager\Domain\Model\Tournround $roundToRemove) {
		$this->rounds->detach($roundToRemove);
	}

	/**
	 * Returns the rounds
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Tournround> $rounds
	 */
	public function getRounds() {
		return $this->rounds;
	}

	/**
	 * Sets the rounds
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Tournround> $rounds
	 * @return void
	 */
	public function setRounds(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $rounds) {
		$this->rounds = $rounds;
	}

}