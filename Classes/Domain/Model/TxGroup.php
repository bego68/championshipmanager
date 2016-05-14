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
 * Gruppe
 */
class TxGroup extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * Kurzname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $shortname = '';

	/**
	 * Zusatzinfos
	 *
	 * @var string
	 */
	protected $properties = '';

	/**
	 * Spiele
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Match>
	 * @cascade remove
	 */
	protected $matches = NULL;

	/**
	 * MAnnschaften
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupteams>
	 * @cascade remove
	 */
	protected $groupteams = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->matches = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->groupteams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

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
	 * Returns the shortname
	 *
	 * @return string $shortname
	 */
	public function getShortname() {
		return $this->shortname;
	}

	/**
	 * Sets the shortname
	 *
	 * @param string $shortname
	 * @return void
	 */
	public function setShortname($shortname) {
		$this->shortname = $shortname;
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
	 * Adds a Match
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Match $match
	 * @return void
	 */
	public function addMatch(\Volleyballserver\Championshipmanager\Domain\Model\Match $match) {
		$this->matches->attach($match);
	}

	/**
	 * Removes a Match
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Match $matchToRemove The Match to be removed
	 * @return void
	 */
	public function removeMatch(\Volleyballserver\Championshipmanager\Domain\Model\Match $matchToRemove) {
		$this->matches->detach($matchToRemove);
	}

	/**
	 * Returns the matches
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Match> $matches
	 */
	public function getMatches() {
		return $this->matches;
	}

	/**
	 * Sets the matches
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Match> $matches
	 * @return void
	 */
	public function setMatches(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $matches) {
		$this->matches = $matches;
	}

	/**
	 * Adds a Groupteams
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteam
	 * @return void
	 */
	public function addGroupteam(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteam) {
		$this->groupteams->attach($groupteam);
	}

	/**
	 * Removes a Groupteams
	 *
	 * @param \Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteamToRemove The Groupteams to be removed
	 * @return void
	 */
	public function removeGroupteam(\Volleyballserver\Championshipmanager\Domain\Model\Groupteams $groupteamToRemove) {
		$this->groupteams->detach($groupteamToRemove);
	}

	/**
	 * Returns the groupteams
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupteams> $groupteams
	 */
	public function getGroupteams() {
		return $this->groupteams;
	}

	/**
	 * Sets the groupteams
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Volleyballserver\Championshipmanager\Domain\Model\Groupteams> $groupteams
	 * @return void
	 */
	public function setGroupteams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $groupteams) {
		$this->groupteams = $groupteams;
	}

	/**
	 * calculate table
	 */
	public function calculateTable(){
		if ($this->groupteams){
			foreach ($this->groupteams as $team){
				$this->calulatePointsTeam($team);
			}
		$this->calculateRanking();
		}
		$this->setTeamsFromPreviousRound();
	}

	/**
	 *
	 * @param Groupteams $team
	 */
	private function calulatePointsTeam(Groupteams &$team){
		$team->reset();
		if($this->matches){
			foreach ($this->matches as $match){
				$this->addPointsMatchTeam($team, $match);
			}
		}
	}

	/**
	 *
	 * @param Groupteams $team
	 * @param Match $match
	 */
	private function addPointsMatchTeam(Groupteams &$team, Match $match){
		if ($team === $match->getHometeam()){
			$this->addPointsMatchHomeTeam($team, $match);
		}
		if ($team === $match->getGuestteam()){
			$this->addPointsMatchGuestTeam($team, $match);
		}
	}

	/**
	 *
	 * @param Groupteams $hometeam
	 * @param Match $match
	 */
	private function addPointsMatchHomeTeam(Groupteams &$hometeam, Match $match){
		$hometeam->setPoints($hometeam->getPoints() + $match->getHomePoints());
		$hometeam->setWonballs($hometeam->getWonballs() + $match->getHomepointsTotal() );
		$hometeam->setWonsets($hometeam->getWonsets() + $match->getHomeWonSets());
		$hometeam->setLostballs($hometeam->getLostballs() + $match->getGuestpointsTotal() );
		$hometeam->setLostsets($hometeam->getLostsets() + $match->getGuestWonSets());
		$hometeam->setWonmatches($hometeam->getWonmatches() + $match->getHomeWon());
	}

	/**
	 *
	 * @param Groupteams $guestteam
	 * @param Match $match
	 */
	private function addPointsMatchGuestTeam(Groupteams $guestteam, Match $match){
		$guestteam->setPoints($guestteam->getPoints() + $match->getGuestPoints());
		$guestteam->setWonballs($guestteam->getWonballs() + $match->getGuestpointsTotal() );
		$guestteam->setWonsets($guestteam->getWonsets() + $match->getGuestWonSets());
		$guestteam->setLostballs($guestteam->getLostballs() + $match->getHomepointsTotal() );
		$guestteam->setLostsets($guestteam->getLostsets() + $match->getHomeWonSets());
		$guestteam->setWonmatches($guestteam->getWonmatches() + $match->getGuestWon());
	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 * @return integer
	 */
	private function returnBetterTeam(Groupteams $team1, Groupteams $team2){
		/** @var integer */
		$result = 0;

		// 1. Punkte
		$result = $this->returnBetterTeamsFromPoints($team1,  $team2);
		if ($result > 0){
			return $result;
		}

		// 2. gewonnene Spielen
		$result = $this->returnBetterTeamsFromWonmatches($team1,  $team2);
		if ($result > 0){
			return $result;
		}

		// 3. gewonnene Satzquotien
		$result = $this->returnBetterTeamsFromSetQuotient($team1,  $team2);
		if ($result > 0){
			return $result;
		}
		// 4. gewonnene Ballquotien
		$result = $this->returnBetterTeamsFromBallQuotient($team1,  $team2);
		if ($result > 0){
			return $result;
		}

		return 0;


	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 * @return integer
	 */
	private function returnBetterTeamsFromPoints(Groupteams $team1, Groupteams $team2){
		if ($team1->getPoints() > $team2->getPoints() ) return 1;
		if ($team2->getPoints() > $team1->getPoints() ) return 2;
		return 0;
	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 * @return integer
	 */
	private function returnBetterTeamsFromWonmatches(Groupteams $team1, Groupteams $team2){
		if ($team1->getWonmatches() > $team2->getWonmatches() ) return 1;
		if ($team2->getWonmatches() > $team1->getWonmatches() ) return 2;
		return 0;
	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 * @return integer
	 */
	private function returnBetterTeamsFromSetQuotient(Groupteams $team1, Groupteams $team2){
		if ($team1->getSetQuotient() == 'max' && $team2->getSetQuotient() == 'max' ) return 0;
		if ($team1->getSetQuotient() == 'max' && $team2->getSetQuotient() != 'max' ) return 1;
		if ($team2->getSetQuotient() == 'max' && $team1->getSetQuotient() != 'max' ) return 2;
		if ($team1->getSetQuotient() > $team2->getSetQuotient() ) return 1;
		if ($team2->getSetQuotient() > $team1->getSetQuotient() ) return 2;
		return 0;
	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 * @return integer
	 */
	private function returnBetterTeamsFromBallQuotient(Groupteams $team1, Groupteams $team2){
		if ($team1->getBallQuotient() == 'max' && $team2->getBallQuotient() == 'max' ) return 0;
		if ($team1->getBallQuotient() == 'max' && $team2->getBallQuotient() != 'max' ) return 1;
		if ($team2->getBallQuotient() == 'max' && $team1->getBallQuotient() != 'max' ) return 2;
		if ($team1->getBallQuotient() > $team2->getBallQuotient() ) return 1;
		if ($team2->getBallQuotient() > $team1->getBallQuotient() ) return 2;
		return 0;
	}


	/**
	 *
	 */
	public function setTeamsFromPreviousRound(){

		if ($this->groupteams){
			foreach ($this->groupteams as $groupteam){
				$groupteam->setTeamFromPreviousRound();
			}
		}
	}

	/**
	 *
	 */
	public function calculateRanking(){

		if ($this->groupteams){
			$groupteams = $this->getGroupteams()->toArray();
			foreach ($groupteams as $team){
				if ($team->getTeam()){
					//echo '<br><b>' . $team->getTeam()->getName()  . '(ranking: ' . $team->getRanking() . ' ) </b>:<br>';
				}
				$this->calculateRankingTeam($team);
			}
			foreach ($groupteams as $team){
				if ($team->getTeam()){
					//echo '<br><b>' . $team->getTeam()->getName()  . '(ranking: ' . $team->getRanking() . ' ) </b>:<br>';
				}
				$this->calculateRankingTeam($team);
			}
		}
	}

	public function calculateRankingTeam(Groupteams $team1){
		if ($this->groupteams){
			foreach ($this->groupteams as $team2){
				$betterTeam = $this->returnBetterTeam( $team1,  $team2);
				if ($team2->getTeam()){
					//echo $team2->getTeam()->getName(). '(ranking: ' . $team2->getRanking() . " ): " . $betterTeam . '<br>';
				}
				switch ($betterTeam){
					case 0: $this->setRankingSameRank( $team1,  $team2);
						break;
					case 1: $this->setRankingTeam1BetterRanked($team1, $team2);
						break;
					case 2: $this->setRankingTeam2BetterRanked($team1, $team2);
						break;
				}

			}
		}
	}
	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 */
	private function setRankingSameRank(Groupteams $team1,Groupteams $team2){

		if ($team1->getRanking() < $team2->getRanking()){
			$team2->setRanking($team1->getRanking());
		}
		if ($team1->getRanking() > $team2->getRanking()){
			$team1->setRanking($team2->getRanking());
		}
	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 */
	private function setRankingTeam1BetterRanked(Groupteams $team1,Groupteams $team2){
		if ($team1->getRanking() > $team2->getRanking()){
			$this->switchRanking($team1,$team2);
		}
		if ($team1->getRanking() == $team2->getRanking()){
			$team2->setRanking($team2->getRanking() + 1);
		}
	}

	/**
	 *
	 * @param Groupteams $team1
	 * @param Groupteams $team2
	 */
	private function setRankingTeam2BetterRanked(Groupteams $team1,Groupteams $team2){

		if ($team1->getRanking() < $team2->getRanking()){
			$this->switchRanking($team1,$team2);
		}
		if ($team1->getRanking() == $team2->getRanking()){
			$team1->setRanking($team1->getRanking() + 1);
		}
	}

	private function switchRanking(Groupteams $team1,Groupteams $team2){
		/** @var integer */
		$h = $team1->getRanking();
		$team1->setRanking($team2->getRanking());
		$team2->setRanking($h);
	}

	public function isFinished(){
		/** @var boolean */
		$result = TRUE;
		if ($this->getMatches()){
			foreach ($this->matches as $match){
				$result = $result && $match->isFinished();
			}
		}
		return $result;
	}

}