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
 * Test case for class \Volleyballserver\Championshipmanager\Domain\Model\Tournround.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Berti Golf <berti@golf-net.de>
 * @author Max Rosenmüller 
 */
class TournroundTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Tournround
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Volleyballserver\Championshipmanager\Domain\Model\Tournround();
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
	public function getGrouproundReturnsInitialValueForGroupround() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getGroupround()
		);
	}

	/**
	 * @test
	 */
	public function setGrouproundForObjectStorageContainingGrouproundSetsGroupround() {
		$groupround = new \Volleyballserver\Championshipmanager\Domain\Model\Groupround();
		$objectStorageHoldingExactlyOneGroupround = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneGroupround->attach($groupround);
		$this->subject->setGroupround($objectStorageHoldingExactlyOneGroupround);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneGroupround,
			'groupround',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addGrouproundToObjectStorageHoldingGroupround() {
		$groupround = new \Volleyballserver\Championshipmanager\Domain\Model\Groupround();
		$grouproundObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$grouproundObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($groupround));
		$this->inject($this->subject, 'groupround', $grouproundObjectStorageMock);

		$this->subject->addGroupround($groupround);
	}

	/**
	 * @test
	 */
	public function removeGrouproundFromObjectStorageHoldingGroupround() {
		$groupround = new \Volleyballserver\Championshipmanager\Domain\Model\Groupround();
		$grouproundObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$grouproundObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($groupround));
		$this->inject($this->subject, 'groupround', $grouproundObjectStorageMock);

		$this->subject->removeGroupround($groupround);

	}

	/**
	 * @test
	 */
	public function getKoroundReturnsInitialValueForKoround() {
		$this->assertEquals(
			NULL,
			$this->subject->getKoround()
		);
	}

	/**
	 * @test
	 */
	public function setKoroundForKoroundSetsKoround() {
		$koroundFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Koround();
		$this->subject->setKoround($koroundFixture);

		$this->assertAttributeEquals(
			$koroundFixture,
			'koround',
			$this->subject
		);
	}
}
