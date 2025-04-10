<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
	new \B13\Container\Tca\ContainerConfiguration(
		'ps14_container_2_column', // CType
		'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:two-column.title', // label
		'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:two-column.description', // description
		[
			[
				['name' => 'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:column.01', 'colPos' => 4001],
				['name' => 'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:column.02', 'colPos' => 4002]
			]
		] // grid configuration
	)
	)
		// set an optional icon configuration
		->setIcon('EXT:ps14_container/Resources/Public/Icons/ps14-module-two-column.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
	new \B13\Container\Tca\ContainerConfiguration(
		'ps14_container_3_column', // CType
		'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:three-column.title', // label
		'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:three-column.description', // description
		[
			[
				['name' => 'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:column.01', 'colPos' => 4001],
				['name' => 'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:column.02', 'colPos' => 4002],
				['name' => 'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:column.03', 'colPos' => 4003]
			]
		] // grid configuration
	)
	)
		// set an optional icon configuration
		->setIcon('EXT:ps14_container/Resources/Public/Icons/ps14-module-two-column.svg')
);

// Flexform
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'*',
	'FILE:EXT:ps14_container/Configuration/FlexForms/ContainerTwoColumns.xml',
	'ps14_container_2_column'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'*',
	'FILE:EXT:ps14_container/Configuration/FlexForms/ContainerThreeColumns.xml',
	'ps14_container_3_column'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'pi_flexform', 'ps14_container_2_column', 'after:header');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'pi_flexform', 'ps14_container_3_column', 'after:header');