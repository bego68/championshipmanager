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
	 * Heim Punkte 1. Satz
	 *
	 * @var integer
	 */
	protected $homepointsset1 = 0;

	/**
	 * Heim Punkte 2. Satz
	 *
	 * @var integer
	 */
	protected $homepointsset2 = 0;

	/**
	 * Heim Punkte 3. Satz
	 *
	 * @var integer
	 */
	protected $homepointsset3 = 0;

	/**
	 * Heim Punkte 4. Satz
	 *
	 * @var integer
	 */
	protected $homepointsset4 = 0;

	/**
	 * Heim Punkte 5. Satz
	 *
	 * @var integer
	 */
	protected $homepointsset5 = 0;

	/**
	 * Gast Punkte 1. Satz
	 *
	 * @var integer
	 */
	protected $guestpointsset1 = 0;

	/**
	 * Gast Punkte 2. Satz
	 *
	 * @var integer
	 */
	protected $guestpointsset2 = 0;

	/**
	 * Gast Punkte 3. Satz
	 *
	 * @var integer
	 */
	protected $guestpointsset3 = 0;

	/**
	 * Gast Punkte 4. Satz
	 *
	 * @var integer
	 */
	protected $guestpointsset4 = 0;

	/**
	 * Gast Punkte 5. Satz
	 *
	 * @var integer
	 */
	protected $guestpointsset5 = 0;

	/**
	 * Name des Spiels
	 *
	 * @var string
	 */
	protected $matchname = '';

	/**
	 * Kurzname
	 *
	 * @var string
	 */
	protected $matchnameshort = '';

	/**
	 * properties
	 *
	 * @var string
	 */
	protected $properties = '';

	/**
	 * Spielnummer
	 *
	 * @var integer
	 */
	protected $number = 0;

	/**
	 * Feld
	 *
	 * @var string
	 */
	protected $court = '';

	/**
	 * Datum
	 *
	 * @var \DateTime
	 */
	protected $spieltdatum = NULL;

	/**
	 * Uhrzeit
	 *
	 * @var integer
	 */
	protected $matchtime = 0;

	/**
	 * heim
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Groupteams
	 */
	protected $hometeam = NULL;

	/**
	 * gast
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Groupteams
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
	 * Returns the guestpointsset1
	 *
	 * @return integer $guestpointsset1
	 */
	public function getGuestpointsset1() {
		return $this->guestpointsset1;
	}

	/**
	 * Sets the guestpointsset1
	 *
	 * @param integer $guestpointsset1
	 * @return void
	 */
	public function setGuestpointsset1($guestpointsset1) {
		$this->guestpointsset1 = $guestpointsset1;
	}

	/**
	 * Returns the guestpointsset2
	 *
	 * @return integer $guestpointsset2
	 */
	public function getGuestpointsset2() {
		return $this->guestpointsset2;
	}

	/**
	 * Sets the guestpointsset2
	 *
	 * @param integer $guestpointsset2
	 * @return void
	 */
	public function setGuestpointsset2($guestpointsset2) {
		$this->guestpointsset2 = $guestpointsset2;
	}

	/**
	 * Returns the guestpointsset3
	 *
	 * @return integer $guestpointsset3
	 */
	public function getGuestpointsset3() {
		return $this->guestpointsset3;
	}

	/**
	 * Sets the guestpointsset3
	 *
	 * @param integer $guestpointsset3
	 * @return void
	 */
	public function setGuestpointsset3($guestpointsset3) {
		$this->guestpointsset3 = $guestpointsset3;
	}

	/**
	 * Returns the guestpointsset4
	 *
	 * @return integer $guestpointsset4
	 */
	public function getGuestpointsset4() {
		return $this->guestpointsset4;
	}

	/**
	 * Sets the guestpointsset4
	 *
	 * @param integer $guestpointsset4
	 * @return void
	 */
	public function setGuestpointsset4($guestpointsset4) {
		$this->guestpointsset4 = $guestpointsset4;
	}

	/**
	 * Returns the guestpointsset5
	 *
	 * @return integer $guestpointsset5
	 */
	public function getGuestpointsset5() {
		return $this->guestpointsset5;
	}

	/**
	 * Sets the guestpointsset5
	 *
	 * @param integer $guestpointsset5
	 * @return void
	 */
	public function setGuestpointsset5($guestpointsset5) {
		$this->guestpointsset5 = $guestpointsset5;
	}

	/**
	 * Returns the matchname
	 *
	 * @return string $matchname
	 */
	public function getMatchname() {
		return $this->matchname;
	}

	/**
	 * Sets the matchname
	 *
	 * @param string $matchname
	 * @return void
	 */
	public function setMatchname($matchname) {
		$this->matchname = $matchname;
	}

	/**
	 * Returns the matchnameshort
	 *
	 * @return string $matchnameshort
	 */
	public function getMatchnameshort() {
		return $this->matchnameshort;
	}

	/**
	 * Sets the matchnameshort
	 *
	 * @param string $matchnameshort
	 * @return void
	 */
	public function setMatchnameshort($matchnameshort) {
		$this->matchnameshort = $matchnameshort;
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
	 * Returns the court
	 *
	 * @return string $court
	 */
	public function getCourt() {
		return $this->court;
	}

	/**
	 * Sets the court
	 *
	 * @param string $court
	 * @return void
	 */
	public function setCourt($court) {
		$this->court = $court;
	}

	/**
	 * Returns the spieltdatum
	 *
	 * @return \DateTime $spieltdatum
	 */
	public function getSpieltdatum() {
		return $this->spieltdatum;
	}

	/**
	 * Sets the spieltdatum
	 *
	 * @param \DateTime $spieltdatum
	 * @return void
	 */
	public function setSpieltdatum(\DateTime $spieltdatum) {
		$this->spieltdatum = $spieltdatum;
	}

	/**
	 * Returns the matchtime
	 *
	 * @return integer $matchtime
	 */
	public function getMatchtime() {
		return $this->matchtime;
	}

	/**
	 * Sets the matchtime
	 *
	 * @param integer $matchtime
	 * @return void
	 */
	public function setMatchtime(integer $matchtime) {
		$this->matchtime = $matchtime;
	}

	/**
	 * Returns the hometeam
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $hometeam
	 */
	public function getHometeam() {
		return $this->hometeam;
	}

	/**
	 * Sets the hometeam
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $hometeam
	 * @return void
	 */
	public function setHometeam(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $hometeam) {
		$this->hometeam = $hometeam;
	}

	/**
	 * Returns the guestteam
	 *
	 * @return \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $guestteam
	 */
	public function getGuestteam() {
		return $this->guestteam;
	}

	/**
	 * Sets the guestteam
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $guestteam
	 * @return void
	 */
	public function setGuestteam(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $guestteam) {
		$this->guestteam = $guestteam;
	}

}