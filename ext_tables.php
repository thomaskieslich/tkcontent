<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/***************
 * Allow Card items on Standard Page
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_tkcontent_cards_item'
);
