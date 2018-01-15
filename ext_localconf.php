<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('enenos_slider', 'Configuration/TypoScript/', 'Typoscript for the plugin.');





call_user_func(function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Enenos.enenos_slider',
        'Pi1',
        [
          'enenos_slider' => 'initialize'  
        ],
        []
    );
    
});
