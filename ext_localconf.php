<?php
defined('TYPO3_MODE') or die();

//register Icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);

$iconRegistry->registerIcon(
    'ce_heroimage',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    ['name' => 'picture-o']
);
$iconRegistry->registerIcon(
    'ce_slider',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    ['name' => 'sliders']
);
$iconRegistry->registerIcon(
    'ce_cards',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    ['name' => 'columns']
);
$iconRegistry->registerIcon(
    'cards_item',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    ['name' => 'id-card']
);
$iconRegistry->registerIcon(
    'ce_googlemaps',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    ['name' => 'globe']
);
