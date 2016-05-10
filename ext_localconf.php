<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Volleyballserver.' . $_EXTKEY,
	'Championshipmanager',
	array(
		'Tournament' => 'list, edit, show, delete, update, create, new',
		'Match' => 'edit, update',
		
	),
	// non-cacheable actions
	array(
		'Tournament' => 'list, edit, show, delete, update, create, new',
		'Match' => 'edit, update',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Volleyballserver.' . $_EXTKEY,
	'Championsipviewer',
	array(
		'Tournament' => 'listread, show',
		
	),
	// non-cacheable actions
	array(
		'Tournament' => 'listread, show',
		
	)
);
