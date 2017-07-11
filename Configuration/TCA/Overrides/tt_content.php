<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

//hide Thumbnails in List
$GLOBALS['TCA']['tt_content']['ctrl']['thumbnail'] = '';

/***************
 * Add content element group to seletor list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:tkcontent/Resources/Private/Language/locallang.xlf:content.div_content',
        '--div--'
    ],
    '--div--',
    'before'
);



//$GLOBALS['TCA']['tt_content']['palettes']['ce-general'] = [
//    'showitem' => '
//            CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
//            colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
//            --linebreak--,
//            sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent,
//            hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
//        '
//];

