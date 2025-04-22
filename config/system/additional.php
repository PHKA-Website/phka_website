<?php

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\PasswordPolicy\Validator\CorePasswordValidator;

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'] = [
    'charset' => 'utf8mb4',
    'dbname' => getenv('DBNAME'),
    'driver' => getenv('DRIVER'),
    'host' => getenv('HOST'),
    'password' => getenv('PASSWORD'),
    'tableoptions' => [
        'charset' => 'utf8mb4',
        'collate' => 'utf8mb4_unicode_ci',
    ],
    'user' => getenv('USER'),
];

$applicationContext = Environment::getContext();

if ($applicationContext->isProduction()) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']['default']['validators'][CorePasswordValidator::class]['options']['minimumLength'] = 16;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] = '(en.ph-ka.de|en.ph-karlsruhe.de|infoscreen.ph-karlsruhe.de|www.ph-ka.de|www.ph-karlsruhe.de)';
} else if ($applicationContext->isDevelopment()) {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = true;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['requireMfa'] = 0;
    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = true;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors']	= 1;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = 1;
}

switch ((string) $applicationContext) {
    case 'Production/phka':
        break;

    case 'Development/phka':
        break;

    // case 'Development/...':
    //     break;

    default:
        break;
}
