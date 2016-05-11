<?php
namespace Volleyballserver\Championshipmanager\Controller;


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
 * MatchController
 */
class MatchController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * matchRepository
	 *
	 * @var \Volleyballserver\Championshipmanager\Domain\Repository\MatchRepository
	 * @inject
	 */
	protected $matchRepository = NULL;

	/**
	 * action edit
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Match $match
	 * @ignorevalidation $match
	 * @return void
	 */
	public function editAction(\Volleyballserver\Championshipmanager\Domain\Model\Match $match) {
		$this->view->assign('match', $match);
	}

	/**
	 * action update
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Match $match
	 * @return void
	 */
	public function updateAction(\Volleyballserver\Championshipmanager\Domain\Model\Match $match) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->matchRepository->update($match);
		$this->redirect('list', 'Tournament');
	}

}