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
 * Test case for class \Volleyballserver\Championshipmanager\Domain\Model\Matchplan.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Berti Golf <berti@golf-net.de>
 * @author Max Rosenmüller 
 */
class MatchplanTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Matchplan
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Volleyballserver\Championshipmanager\Domain\Model\Matchplan();
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
	public function getRoundsReturnsInitialValueForTournround() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRounds()
		);
	}

	/**
	 * @test
	 */
	public function setRoundsForObjectStorageContainingTournroundSetsRounds() {
		$round = new \Volleyballserver\Championshipmanager\Domain\Model\Tournround();
		$objectStorageHoldingExactlyOneRounds = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRounds->attach($round);
		$this->subject->setRounds($objectStorageHoldingExactlyOneRounds);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRounds,
			'rounds',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRoundToObjectStorageHoldingRounds() {
		$round = new \Volleyballserver\Championshipmanager\Domain\Model\Tournround();
		$roundsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$roundsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($round));
		$this->inject($this->subject, 'rounds', $roundsObjectStorageMock);

		$this->subject->addRound($round);
	}

	/**
	 * @test
	 */
	public function removeRoundFromObjectStorageHoldingRounds() {
		$round = new \Volleyballserver\Championshipmanager\Domain\Model\Tournround();
		$roundsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$roundsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($round));
		$this->inject($this->subject, 'rounds', $roundsObjectStorageMock);

		$this->subject->removeRound($round);

	}
}
