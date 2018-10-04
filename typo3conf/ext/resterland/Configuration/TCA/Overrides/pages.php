<?php
defined('TYPO3_MODE') || die();

/**
 * Temporary variables
 */
$extensionKey = 'resterland';

/**
 * Register PageTS for Resterland
 */

// BackendLayouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
    'Resterland: Backend Layouts'
);

// TCEMAIN
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/TCEMAIN.tsconfig',
    'Resterland: TCEMAIN'
);

// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/TCEFORM.tsconfig',
    'Resterland: TCEFORM'
);

// SHARED
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/Mod/SHARED.tsconfig',
    'Resterland: SHARED'
);
