<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
	new \B13\Container\Tca\ContainerConfiguration(
		'ps14_container', // CType
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