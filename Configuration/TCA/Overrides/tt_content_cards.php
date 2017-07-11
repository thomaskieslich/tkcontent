<?php
defined('TYPO3_MODE') || die();


/***************
 * Add content element to seletor list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:tkcontent/Resources/Private/Language/locallang.xlf:content.cards',
        'cards',
        'ce_cards'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cards'] = 'ce_cards';


/***************
 * Content Palette
 */
$GLOBALS['TCA']['tt_content']['palettes']['cards'] = [
    'showitem' => '
           cols,
           --linebreak--,
           tx_tkcontent_cards_item
        '
];

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['cards'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                --palette--;LLL:EXT:tkcontent/Resources/Private/Language/locallang.xlf:content.cards;cards,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
    'columnsOverrides' => [
        'cols' => [
            'label' => 'LLL:EXT:tkcontent/Resources/Private/Language/locallang.xlf:content.cards.cols',
            'config' => [
                'default' => 3
            ]
        ]
    ]
];


/***************
 * Register column
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'tx_tkcontent_cards_item' => [
            'label' => 'LLL:EXT:tkcontent/Resources/Private/Language/locallang.xlf:content.cards',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_tkcontent_cards_item',
                'foreign_field' => 'tt_content',
                'appearance' => [
                    'useSortable' => true,
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                    'showRemovedLocalizationRecords' => false,
                    'expandSingle' => true,
                    'enabledControls' => [
                        'localize' => true,
                    ]
                ],
                'behaviour' => [
                    'mode' => 'select',
                    'localizeChildrenAtParentLocalization' => true,
                ]
            ]
        ]
    ]
);
