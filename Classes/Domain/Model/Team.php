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
 * Team
 */
class Team extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * ansprechpartner
	 *
	 * @var string
	 */
	protected $ansprechpartner = '';

	/**
	 * telefon
	 *
	 * @var string
	 */
	protected $telefon = '';

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * picture
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $picture = NULL;

	/**
	 * url
	 *
	 * @var string
	 */
	protected $url = '';

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
	 * Returns the ansprechpartner
	 *
	 * @return string $ansprechpartner
	 */
	public function getAnsprechpartner() {
		return $this->ansprechpartner;
	}

	/**
	 * Sets the ansprechpartner
	 *
	 * @param string $ansprechpartner
	 * @return void
	 */
	public function setAnsprechpartner($ansprechpartner) {
		$this->ansprechpartner = $ansprechpartner;
	}

	/**
	 * Returns the telefon
	 *
	 * @return string $telefon
	 */
	public function getTelefon() {
		return $this->telefon;
	}

	/**
	 * Sets the telefon
	 *
	 * @param string $telefon
	 * @return void
	 */
	public function setTelefon($telefon) {
		$this->telefon = $telefon;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the picture
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
	 */
	public function getPicture() {
		return $this->picture;
	}

	/**
	 * Sets the picture
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
	 * @return void
	 */
	public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture) {
		$this->picture = $picture;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

}