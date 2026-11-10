<?php

declare(strict_types=1);

use B13\Container\Tca\ContainerConfiguration;
use B13\Container\Tca\Registry;
use Ps14\Foundation\Service\TcaService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

(static function (): void {
    $languageFile = 'LLL:EXT:ps14_container/Resources/Private/Language/locallang_tca.xlf:';

    $containers = [
        'ps14_container_2_column' => [
            'label' => 'two-column',
            'icon' => 'content-container-columns-2',
            'columns' => 2,
            'flexForm' => 'ContainerTwoColumn.xml',
        ],
        'ps14_container_3_column' => [
            'label' => 'three-column',
            'icon' => 'content-container-columns-3',
            'columns' => 3,
            'flexForm' => 'ContainerThreeColumn.xml',
        ],
    ];

    $registry = GeneralUtility::makeInstance(Registry::class);

    foreach ($containers as $cType => $container) {
        $grid = [];

        for ($column = 1; $column <= $container['columns']; $column++) {
            $grid[] = [
                'name' => $languageFile . 'column.' . $column,
                'colPos' => 4000 + $column,
            ];
        }

        $registry->configureContainer(
            new ContainerConfiguration(
                $cType,
                $languageFile . $container['label'] . '.title',
                $languageFile . $container['label'] . '.description',
                [$grid]
            )->setIcon($container['icon'])
        );

        $GLOBALS['TCA']['tt_content']['types'][$cType]['showitem'] = TcaService::getShowitem(
            ['general', 'appearance', 'language', 'access', 'categories', 'notes', 'extended'],
            [
                'general' => '--palette--;;general, --palette--;;headers, --palette--;;foundation_identifier, pi_flexform,',
            ]
        );

        $GLOBALS['TCA']['tt_content']['types'][$cType]['columnsOverrides']['pi_flexform']['label'] = $languageFile . 'flexform.label';
        $GLOBALS['TCA']['tt_content']['types'][$cType]['columnsOverrides']['pi_flexform']['l10n_mode'] = 'exclude';
        $GLOBALS['TCA']['tt_content']['types'][$cType]['columnsOverrides']['pi_flexform']['config']['ds'] = 'FILE:EXT:ps14_container/Configuration/FlexForms/' . $container['flexForm'];
    }
})();
