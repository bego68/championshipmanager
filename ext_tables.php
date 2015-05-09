<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Championshipmanager',
	'Championship Manager'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Championsipviewer',
	'Championsip Viewer'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Championship Manager');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_tournament', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_tournament.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_tournament');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_tournament'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,gender,begin,end,type,sportshall,teams,matchplan,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Tournament.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_tournament.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_sportshall', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_sportshall.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_sportshall');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_sportshall'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_sportshall',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,street,zip,city,telefon,link,bild,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sportshall.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_sportshall.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_team', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_team.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_team');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_team'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_team',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,ansprechpartner,telefon,email,picture,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Team.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_team.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_matchplan', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_matchplan.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_matchplan');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_matchplan'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_matchplan',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,rounds,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Matchplan.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_matchplan.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_tournround', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_tournround.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_tournround');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_tournround'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournround',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,ko,shortname,position,groups,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Tournround.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_tournround.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_group', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_group.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_group');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_group'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_group',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,shortname,properties,matches,groupteams,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Group.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_group.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_match', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_match.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_match');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_match'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_match',
		'label' => 'homepointsset1',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'homepointsset1,homepointsset2,homepointsset3,homepointsset4,homepointsset5,guestpointsset1,guestpointsset2,guestpointsset3,guestpointsset4,guestpointsset5,matchname,matchnameshort,properties,number,hometeam,guestteam,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Match.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_match.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_championshipmanager_domain_model_groupteams', 'EXT:championshipmanager/Resources/Private/Language/locallang_csh_tx_championshipmanager_domain_model_groupteams.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_championshipmanager_domain_model_groupteams');
$GLOBALS['TCA']['tx_championshipmanager_domain_model_groupteams'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams',
		'label' => 'number',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'number,groupfromranking,ranking,points,sets,balls,properties,team,groupfrom,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Groupteams.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_championshipmanager_domain_model_groupteams.gif'
	),
);
