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
 * Tournround
 */
class Tournround extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * Gruppe
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupround>
	 * @cascade remove
	 */
	protected $groupround = NULL;

	/**
	 * koround
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Koround
	 */
	protected $koround = NULL;

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
		$this->groupround = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Adds a Groupround
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupround $groupround
	 * @return void
	 */
	public function addGroupround(\Volleyballserver\Championshipmanager\Domain\Model\Groupround $groupround) {
		$this->groupround->attach($groupround);
	}

	/**
	 * Removes a Groupround
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupround $grouproundToRemove The Groupround to be removed
	 * @return void
	 */
	public function removeGroupround(\Volleyballserver\Championshipmanager\Domain\Model\Groupround $grouproundToRemove) {
		$this->groupround->detach($grouproundToRemove);
	}

	/**
	 * Returns the groupround
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupround> $groupround
	 */
	public function getGroupround() {
		return $this->groupround;
	}

	/**
	 * Sets the groupround
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupround> $groupround
	 * @return void
	 */
	public function setGroupround(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $groupround) {
		$this->groupround = $groupround;
	}

	/**
	 * Returns the koround
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Koround $koround
	 */
	public function getKoround() {
		return $this->koround;
	}

	/**
	 * Sets the koround
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Koround $koround
	 * @return void
	 */
	public function setKoround(\Volleyballserver\Championshipmanager\Domain\Model\Koround $koround) {
		$this->koround = $koround;
	}

}