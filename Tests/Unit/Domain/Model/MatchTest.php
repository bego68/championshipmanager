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
	public function getGuestpointsset1ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGuestpointsset1()
		);
	}

	/**
	 * @test
	 */
	public function setGuestpointsset1ForIntegerSetsGuestpointsset1() {
		$this->subject->setGuestpointsset1(12);

		$this->assertAttributeEquals(
			12,
			'guestpointsset1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGuestpointsset2ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGuestpointsset2()
		);
	}

	/**
	 * @test
	 */
	public function setGuestpointsset2ForIntegerSetsGuestpointsset2() {
		$this->subject->setGuestpointsset2(12);

		$this->assertAttributeEquals(
			12,
			'guestpointsset2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGuestpointsset3ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGuestpointsset3()
		);
	}

	/**
	 * @test
	 */
	public function setGuestpointsset3ForIntegerSetsGuestpointsset3() {
		$this->subject->setGuestpointsset3(12);

		$this->assertAttributeEquals(
			12,
			'guestpointsset3',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGuestpointsset4ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGuestpointsset4()
		);
	}

	/**
	 * @test
	 */
	public function setGuestpointsset4ForIntegerSetsGuestpointsset4() {
		$this->subject->setGuestpointsset4(12);

		$this->assertAttributeEquals(
			12,
			'guestpointsset4',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGuestpointsset5ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGuestpointsset5()
		);
	}

	/**
	 * @test
	 */
	public function setGuestpointsset5ForIntegerSetsGuestpointsset5() {
		$this->subject->setGuestpointsset5(12);

		$this->assertAttributeEquals(
			12,
			'guestpointsset5',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMatchnameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMatchname()
		);
	}

	/**
	 * @test
	 */
	public function setMatchnameForStringSetsMatchname() {
		$this->subject->setMatchname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'matchname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMatchnameshortReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMatchnameshort()
		);
	}

	/**
	 * @test
	 */
	public function setMatchnameshortForStringSetsMatchnameshort() {
		$this->subject->setMatchnameshort('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'matchnameshort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPropertiesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getProperties()
		);
	}

	/**
	 * @test
	 */
	public function setPropertiesForStringSetsProperties() {
		$this->subject->setProperties('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'properties',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNumberReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getNumber()
		);
	}

	/**
	 * @test
	 */
	public function setNumberForIntegerSetsNumber() {
		$this->subject->setNumber(12);

		$this->assertAttributeEquals(
			12,
			'number',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHometeamReturnsInitialValueForGroupteams() {
		$this->assertEquals(
			NULL,
			$this->subject->getHometeam()
		);
	}

	/**
	 * @test
	 */
	public function setHometeamForGroupteamsSetsHometeam() {
		$hometeamFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Groupteams();
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
	public function getGuestteamReturnsInitialValueForGroupteams() {
		$this->assertEquals(
			NULL,
			$this->subject->getGuestteam()
		);
	}

	/**
	 * @test
	 */
	public function setGuestteamForGroupteamsSetsGuestteam() {
		$guestteamFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Groupteams();
		$this->subject->setGuestteam($guestteamFixture);

		$this->assertAttributeEquals(
			$guestteamFixture,
			'guestteam',
			$this->subject
		);
	}
}
