<?php
defined('TYPO3_MODE') or die();

// Add pageTSconfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'tkcontent',
    'Configuration/PageTS/NewContentElementWizard.tsconfig',
    'New Content Elements'
);
