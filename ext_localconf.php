<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SpoonerWeb.' . $_EXTKEY,
	'Listing',
	array(
		'Event' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Event' => '',
		
	)
);
