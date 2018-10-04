<?php
defined('TYPO3_MODE') || die();

/**
 * Default TypoScript for Resterland
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'resterland',
    'Configuration/TypoScript',
    'Resterland'
);
