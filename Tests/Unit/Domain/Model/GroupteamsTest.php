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
 * Test case for class \Volleyballserver\Championshipmanager\Domain\Model\Groupteams.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Berti Golf <berti@golf-net.de>
 * @author Max Rosenmüller 
 */
class GroupteamsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Volleyballserver\Championshipmanager\Domain\Model\Groupteams
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Volleyballserver\Championshipmanager\Domain\Model\Groupteams();
	}

	protected function tearDown() {
		unset($this->subject);
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
	public function getGroupfromrankingReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGroupfromranking()
		);
	}

	/**
	 * @test
	 */
	public function setGroupfromrankingForIntegerSetsGroupfromranking() {
		$this->subject->setGroupfromranking(12);

		$this->assertAttributeEquals(
			12,
			'groupfromranking',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRankingReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getRanking()
		);
	}

	/**
	 * @test
	 */
	public function setRankingForIntegerSetsRanking() {
		$this->subject->setRanking(12);

		$this->assertAttributeEquals(
			12,
			'ranking',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPointsReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPoints()
		);
	}

	/**
	 * @test
	 */
	public function setPointsForIntegerSetsPoints() {
		$this->subject->setPoints(12);

		$this->assertAttributeEquals(
			12,
			'points',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetsReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getSets()
		);
	}

	/**
	 * @test
	 */
	public function setSetsForIntegerSetsSets() {
		$this->subject->setSets(12);

		$this->assertAttributeEquals(
			12,
			'sets',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBallsReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getBalls()
		);
	}

	/**
	 * @test
	 */
	public function setBallsForIntegerSetsBalls() {
		$this->subject->setBalls(12);

		$this->assertAttributeEquals(
			12,
			'balls',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPropertiesReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getProperties()
		);
	}

	/**
	 * @test
	 */
	public function setPropertiesForIntegerSetsProperties() {
		$this->subject->setProperties(12);

		$this->assertAttributeEquals(
			12,
			'properties',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTeamReturnsInitialValueForTeam() {
		$this->assertEquals(
			NULL,
			$this->subject->getTeam()
		);
	}

	/**
	 * @test
	 */
	public function setTeamForTeamSetsTeam() {
		$teamFixture = new \Volleyballserver\Championshipmanager\Domain\Model\Team();
		$this->subject->setTeam($teamFixture);

		$this->assertAttributeEquals(
			$teamFixture,
			'team',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGroupfromReturnsInitialValueForTxGroup() {
		$this->assertEquals(
			NULL,
			$this->subject->getGroupfrom()
		);
	}

	/**
	 * @test
	 */
	public function setGroupfromForTxGroupSetsGroupfrom() {
		$groupfromFixture = new \Volleyballserver\Championshipmanager\Domain\Model\TxGroup();
		$this->subject->setGroupfrom($groupfromFixture);

		$this->assertAttributeEquals(
			$groupfromFixture,
			'groupfrom',
			$this->subject
		);
	}
}
