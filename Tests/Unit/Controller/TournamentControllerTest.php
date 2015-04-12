<?php
namespace Volleyballserver\Championshipmanager\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Berti Golf <berti@golf-net.de>, Volleyballserver
 *  			Max Rosenmüller 
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
 * Test case for class Volleyballserver\Championshipmanager\Controller\TournamentController.
 *
 * @author Berti Golf <berti@golf-net.de>
 * @author Max Rosenmüller 
 */
class TournamentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Volleyballserver\Championshipmanager\Controller\TournamentController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Volleyballserver\\Championshipmanager\\Controller\\TournamentController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTournamentsFromRepositoryAndAssignsThemToView() {

		$allTournaments = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$tournamentRepository = $this->getMock('Volleyballserver\\Championshipmanager\\Domain\\Repository\\TournamentRepository', array('findAll'), array(), '', FALSE);
		$tournamentRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTournaments));
		$this->inject($this->subject, 'tournamentRepository', $tournamentRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('tournaments', $allTournaments);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenTournamentToView() {
		$tournament = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tournament', $tournament);

		$this->subject->showAction($tournament);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenTournamentToView() {
		$tournament = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newTournament', $tournament);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($tournament);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenTournamentToTournamentRepository() {
		$tournament = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();

		$tournamentRepository = $this->getMock('Volleyballserver\\Championshipmanager\\Domain\\Repository\\TournamentRepository', array('add'), array(), '', FALSE);
		$tournamentRepository->expects($this->once())->method('add')->with($tournament);
		$this->inject($this->subject, 'tournamentRepository', $tournamentRepository);

		$this->subject->createAction($tournament);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenTournamentToView() {
		$tournament = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('tournament', $tournament);

		$this->subject->editAction($tournament);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenTournamentInTournamentRepository() {
		$tournament = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();

		$tournamentRepository = $this->getMock('Volleyballserver\\Championshipmanager\\Domain\\Repository\\TournamentRepository', array('update'), array(), '', FALSE);
		$tournamentRepository->expects($this->once())->method('update')->with($tournament);
		$this->inject($this->subject, 'tournamentRepository', $tournamentRepository);

		$this->subject->updateAction($tournament);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenTournamentFromTournamentRepository() {
		$tournament = new \Volleyballserver\Championshipmanager\Domain\Model\Tournament();

		$tournamentRepository = $this->getMock('Volleyballserver\\Championshipmanager\\Domain\\Repository\\TournamentRepository', array('remove'), array(), '', FALSE);
		$tournamentRepository->expects($this->once())->method('remove')->with($tournament);
		$this->inject($this->subject, 'tournamentRepository', $tournamentRepository);

		$this->subject->deleteAction($tournament);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTournamentsFromRepositoryAndAssignsThemToView() {

		$allTournaments = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$tournamentRepository = $this->getMock('Volleyballserver\\Championshipmanager\\Domain\\Repository\\TournamentRepository', array('findAll'), array(), '', FALSE);
		$tournamentRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTournaments));
		$this->inject($this->subject, 'tournamentRepository', $tournamentRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('tournaments', $allTournaments);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
