<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_championshipmanager_domain_model_groupteams'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_championshipmanager_domain_model_groupteams']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, number, groupfromranking, ranking, points, sets, balls, properties, team, groupfrom',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, number, groupfromranking, ranking, points, sets, balls, properties, team, groupfrom, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_championshipmanager_domain_model_groupteams',
				'foreign_table_where' => 'AND tx_championshipmanager_domain_model_groupteams.pid=###CURRENT_PID### AND tx_championshipmanager_domain_model_groupteams.sys_language_uid IN (-1,0)',
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

		'number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.number',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'groupfromranking' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.groupfromranking',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ranking' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.ranking',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'points' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.points',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'sets' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.sets',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'balls' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.balls',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'properties' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.properties',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'team' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.team',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_championshipmanager_domain_model_team',
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
		'groupfrom' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:championshipmanager/Resources/Private/Language/locallang_db.xlf:tx_championshipmanager_domain_model_groupteams.groupfrom',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_championshipmanager_domain_model_group',
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
