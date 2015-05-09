<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_championshipmanager_domain_model_tournament'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_championshipmanager_domain_model_tournament']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, gender, begin, end, type, sportshall, teams, matchplan',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, gender, begin, end, type, sportshall, teams, matchplan, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_championshipmanager_domain_model_tournament',
				'foreign_table_where' => 'AND tx_championshipmanager_domain_model_tournament.pid=###CURRENT_PID### AND tx_championshipmanager_domain_model_tournament.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gender' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.gender',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- bitte wählen --', 0),
					array('weiblich', 1),
					array('männlich', 2),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'begin' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.begin',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'end' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.end',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.type',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sportshall' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.sportshall',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_championshipmanager_domain_model_sportshall',
				'foreign_field' => 'tournament',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		'teams' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.teams',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_championshipmanager_domain_model_team',
				'foreign_field' => 'tournament',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		'matchplan' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_tournament.matchplan',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_championshipmanager_domain_model_matchplan',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),

	),
);
