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
 * Runde
 */
class Tournround extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * ko
	 *
	 * @var boolean
	 */
	protected $ko = FALSE;

	/**
	 * shortname
	 *
	 * @var string
	 */
	protected $shortname = '';

	/**
	 * position
	 *
	 * @var integer
	 */
	protected $position = 0;

	/**
	 * Gruppen
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\TxGroup>
	 * @cascade remove
	 */
	protected $groups = NULL;

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
		$this->groups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the ko
	 *
	 * @return boolean $ko
	 */
	public function getKo() {
		return $this->ko;
	}

	/**
	 * Sets the ko
	 *
	 * @param boolean $ko
	 * @return void
	 */
	public function setKo($ko) {
		$this->ko = $ko;
	}

	/**
	 * Returns the boolean state of ko
	 *
	 * @return boolean
	 */
	public function isKo() {
		return $this->ko;
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
	 * Returns the position
	 *
	 * @return integer $position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Sets the position
	 *
	 * @param integer $position
	 * @return void
	 */
	public function setPosition($position) {
		$this->position = $position;
	}

	/**
	 * Adds a TxGroup
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\TxGroup $group
	 * @return void
	 */
	public function addGroup(\Volleyballserver\Championshipmanager\Domain\Model\TxGroup $group) {
		$this->groups->attach($group);
	}

	/**
	 * Removes a TxGroup
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\TxGroup $groupToRemove The TxGroup to be removed
	 * @return void
	 */
	public function removeGroup(\Volleyballserver\Championshipmanager\Domain\Model\TxGroup $groupToRemove) {
		$this->groups->detach($groupToRemove);
	}

	/**
	 * Returns the groups
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\TxGroup> $groups
	 */
	public function getGroups() {
		return $this->groups;
	}

	/**
	 * Sets the groups
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\TxGroup> $groups
	 * @return void
	 */
	public function setGroups(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $groups) {
		$this->groups = $groups;
	}

	public function calculateTables(){
		if ($this->groups){
			foreach ($this->groups as $group){
				$group->calculateTable();
			}
		}
	}

}