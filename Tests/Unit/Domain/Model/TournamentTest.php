<?php

namespace Volleyballserver\Championshipmanager\Tests\Unit\Domain\Model;

/***************************************************************
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Volleyballserver\Championshipmanager\Domain\Model\Tournament.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Berti Golf <berti@golf-net.de>
 * @author Max Rosenmüller 
 */
class TournamentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Tournament
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGender()
		);
	}

	/**
	 * @test
	 */
	public function setGenderForIntegerSetsGender() {
		$this->subject->setGender(12);

		$this->assertAttributeEquals(
			12,
			'gender',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBeginReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getBegin()
		);
	}

	/**
	 * @test
	 */
	public function setBeginForDateTimeSetsBegin() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setBegin($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'begin',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEnd()
		);
	}

	/**
	 * @test
	 */
	public function setEndForDateTimeSetsEnd() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEnd($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'end',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForStringSetsType() {
		$this->subject->setType('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'type',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSportshallReturnsInitialValueForSportshall() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getSportshall()
		);
	}

	/**
	 * @test
	 */
	public function setSportshallForObjectStorageContainingSportshallSetsSportshall() {
		$sportshall = new \Volleyballserver\Championshipmanager\Domain\Model\Sportshall();
		$objectStorageHoldingExactlyOneSportshall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneSportshall->attach($sportshall);
		$this->subject->setSportshall($objectStorageHoldingExactlyOneSportshall);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneSportshall,
			'sportshall',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addSportshallToObjectStorageHoldingSportshall() {
		$sportshall = new \Volleyballserver\Championshipmanager\Domain\Model\Sportshall();
		$sportshallObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$sportshallObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($sportshall));
		$this->inject($this->subject, 'sportshall', $sportshallObjectStorageMock);

		$this->subject->addSportshall($sportshall);
	}

	/**
	 * @test
	 */
	public function removeSportshallFromObjectStorageHoldingSportshall() {
		$sportshall = new \Volleyballserver\Championshipmanager\Domain\Model\Sportshall();
		$sportshallObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$sportshallObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($sportshall));
		$this->inject($this->subject, 'sportshall', $sportshallObjectStorageMock);

		$this->subject->removeSportshall($sportshall);

	}

	/**
	 * @test
	 */
	public function getTeamsReturnsInitialValueForTeam() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getTeams()
		);
	}

	/**
	 * @test
	 */
	public function setTeamsForObjectStorageContainingTeamSetsTeams() {
		$team = new \Volleyballserver\Championshipmanager\Domain\Model\Team();
		$objectStorageHoldingExactlyOneTeams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneTeams->attach($team);
		$this->subject->setTeams($objectStorageHoldingExactlyOneTeams);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneTeams,
			'teams',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTeamToObjectStorageHoldingTeams() {
		$team = new \Volleyballserver\Championshipmanager\Domain\Model\Team();
		$teamsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$teamsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($team));
		$this->inject($this->subject, 'teams', $teamsObjectStorageMock);

		$this->subject->addTeam($team);
	}

	/**
	 * @test
	 */
	public function removeTeamFromObjectStorageHoldingTeams() {
		$team = new \Volleyballserver\Championshipmanager\Domain\Model\Team();
		$teamsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$teamsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($team));
		$this->inject($this->subject, 'teams', $teamsObjectStorageMock);

		$this->subject->removeTeam($team);

	}

	/**
	 * @test
	 */
	public function getMatchplanReturnsInitialValueForMatchplan() {
		$this->assertEquals(
			NULL,
			$this->subject->getMatchplan()
		);
	}

	/**
	 * @test
	 */
	public function setMatchplanForMatchplanSetsMatchplan() {
		$matchplanFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Matchplan();
		$this->subject->setMatchplan($matchplanFixture);

		$this->assertAttributeEquals(
			$matchplanFixture,
			'matchplan',
			$this->subject
		);
	}
}
