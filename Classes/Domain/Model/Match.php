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
 * Match
 */
class Match extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * homepointsset1
	 *
	 * @var integer
	 */
	protected $homepointsset1 = 0;

	/**
	 * homepointsset2
	 *
	 * @var integer
	 */
	protected $homepointsset2 = 0;

	/**
	 * homepointsset3
	 *
	 * @var integer
	 */
	protected $homepointsset3 = 0;

	/**
	 * homepointsset4
	 *
	 * @var integer
	 */
	protected $homepointsset4 = 0;

	/**
	 * homepointsset5
	 *
	 * @var integer
	 */
	protected $homepointsset5 = 0;

	/**
	 * heim
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Team
	 */
	protected $hometeam = NULL;

	/**
	 * gast
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Team
	 */
	protected $guestteam = NULL;

	/**
	 * Returns the homepointsset1
	 *
	 * @return integer $homepointsset1
	 */
	public function getHomepointsset1() {
		return $this->homepointsset1;
	}

	/**
	 * Sets the homepointsset1
	 *
	 * @param integer $homepointsset1
	 * @return void
	 */
	public function setHomepointsset1($homepointsset1) {
		$this->homepointsset1 = $homepointsset1;
	}

	/**
	 * Returns the homepointsset2
	 *
	 * @return integer $homepointsset2
	 */
	public function getHomepointsset2() {
		return $this->homepointsset2;
	}

	/**
	 * Sets the homepointsset2
	 *
	 * @param integer $homepointsset2
	 * @return void
	 */
	public function setHomepointsset2($homepointsset2) {
		$this->homepointsset2 = $homepointsset2;
	}

	/**
	 * Returns the homepointsset3
	 *
	 * @return integer $homepointsset3
	 */
	public function getHomepointsset3() {
		return $this->homepointsset3;
	}

	/**
	 * Sets the homepointsset3
	 *
	 * @param integer $homepointsset3
	 * @return void
	 */
	public function setHomepointsset3($homepointsset3) {
		$this->homepointsset3 = $homepointsset3;
	}

	/**
	 * Returns the homepointsset4
	 *
	 * @return integer $homepointsset4
	 */
	public function getHomepointsset4() {
		return $this->homepointsset4;
	}

	/**
	 * Sets the homepointsset4
	 *
	 * @param integer $homepointsset4
	 * @return void
	 */
	public function setHomepointsset4($homepointsset4) {
		$this->homepointsset4 = $homepointsset4;
	}

	/**
	 * Returns the homepointsset5
	 *
	 * @return integer $homepointsset5
	 */
	public function getHomepointsset5() {
		return $this->homepointsset5;
	}

	/**
	 * Sets the homepointsset5
	 *
	 * @param integer $homepointsset5
	 * @return void
	 */
	public function setHomepointsset5($homepointsset5) {
		$this->homepointsset5 = $homepointsset5;
	}

	/**
	 * Returns the hometeam
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Team $hometeam
	 */
	public function getHometeam() {
		return $this->hometeam;
	}

	/**
	 * Sets the hometeam
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Team $hometeam
	 * @return void
	 */
	public function setHometeam(\Volleyballserver\Championshipmanager\Domain\Model\Team $hometeam) {
		$this->hometeam = $hometeam;
	}

	/**
	 * Returns the guestteam
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Team $guestteam
	 */
	public function getGuestteam() {
		return $this->guestteam;
	}

	/**
	 * Sets the guestteam
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Team $guestteam
	 * @return void
	 */
	public function setGuestteam(\Volleyballserver\Championshipmanager\Domain\Model\Team $guestteam) {
		$this->guestteam = $guestteam;
	}

}