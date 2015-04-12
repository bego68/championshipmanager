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
 * Test case for class \Volleyballserver\Championshipmanager\Domain\Model\Match.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Berti Golf <berti@golf-net.de>
 * @author Max Rosenmüller 
 */
class MatchTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Match
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Volleyballserver\Championshipmanager\Domain\Model\Match();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getHomepointsset1ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getHomepointsset1()
		);
	}

	/**
	 * @test
	 */
	public function setHomepointsset1ForIntegerSetsHomepointsset1() {
		$this->subject->setHomepointsset1(12);

		$this->assertAttributeEquals(
			12,
			'homepointsset1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHomepointsset2ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getHomepointsset2()
		);
	}

	/**
	 * @test
	 */
	public function setHomepointsset2ForIntegerSetsHomepointsset2() {
		$this->subject->setHomepointsset2(12);

		$this->assertAttributeEquals(
			12,
			'homepointsset2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHomepointsset3ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getHomepointsset3()
		);
	}

	/**
	 * @test
	 */
	public function setHomepointsset3ForIntegerSetsHomepointsset3() {
		$this->subject->setHomepointsset3(12);

		$this->assertAttributeEquals(
			12,
			'homepointsset3',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHomepointsset4ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getHomepointsset4()
		);
	}

	/**
	 * @test
	 */
	public function setHomepointsset4ForIntegerSetsHomepointsset4() {
		$this->subject->setHomepointsset4(12);

		$this->assertAttributeEquals(
			12,
			'homepointsset4',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHomepointsset5ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getHomepointsset5()
		);
	}

	/**
	 * @test
	 */
	public function setHomepointsset5ForIntegerSetsHomepointsset5() {
		$this->subject->setHomepointsset5(12);

		$this->assertAttributeEquals(
			12,
			'homepointsset5',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHometeamReturnsInitialValueForTeam() {
		$this->assertEquals(
			NULL,
			$this->subject->getHometeam()
		);
	}

	/**
	 * @test
	 */
	public function setHometeamForTeamSetsHometeam() {
		$hometeamFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Team();
		$this->subject->setHometeam($hometeamFixture);

		$this->assertAttributeEquals(
			$hometeamFixture,
			'hometeam',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGuestteamReturnsInitialValueForTeam() {
		$this->assertEquals(
			NULL,
			$this->subject->getGuestteam()
		);
	}

	/**
	 * @test
	 */
	public function setGuestteamForTeamSetsGuestteam() {
		$guestteamFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Team();
		$this->subject->setGuestteam($guestteamFixture);

		$this->assertAttributeEquals(
			$guestteamFixture,
			'guestteam',
			$this->subject
		);
	}
}
