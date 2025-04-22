<?php
return [
    'BE' => [
        'checkStoredRecordsLoose' => false,
        'compressionLevel' => '5',
        'cookieName' => 'phka_be_user',
        'debug' => false,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$TbItVh05MJauY2UcloIVbw$kelh9JNXoLjQZ8dNvGNhK/zeFzDlZ4znafDjaew1BjQ',
        'lockIP' => 4,
        'lockIPv6' => 8,
        'lockSSL' => true,
        'lockSSLPort' => 443,
        'loginRateLimit' => 3,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2idPasswordHash',
            'options' => [],
        ],
        'passwordReset' => false,
        'passwordResetForAdmins' => false,
        'requireMfa' => 1,
        'sessionTimeout' => 14400,
        'showRefreshLoginPopup' => true,
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '0',
            'offlineMode' => '1',
        ],
        'scheduler' => [
            'maxLifetime' => '480',
            'showSampleTasks' => '0',
        ],
    ],
    'FE' => [
        'compressionLevel' => 5,
        'cookieName' => 'phka_fe_user',
        'cookieSameSite' => 'strict',
        'debug' => false,
        'disableNoCacheParameter' => true,
        'lockIP' => 3,
        'lockIPv6' => 6,
        'loginRateLimit' => 3,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2idPasswordHash',
            'options' => [],
        ],
        'permalogin' => '-1',
        'sessionTimeout' => 10800,
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'defaultScheme' => 'https',
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '184983f8b0236f0a9e61c7d9926e28c3ff187449866f6e3068fc2cc9495c2fd72f1194bbd1a0115b7244bf033f2c3019',
        'exceptionalErrors' => 4096,
        'features' => [
            'security.backend.htmlSanitizeRte' => true,
            'security.usePasswordPolicyForFrontendUsers' => true,
            'subrequestPageErrors' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'fileCreateMask' => '0660',
        'folderCreateMask' => '2770',
        'generateApacheHtaccess' => false,
        'lang' => [
            'requireApprovedLocalizations' => false,
        ],
        'phpTimeZone' => 'Europe/Berlin',
        'sitename' => 'PHKA',
        'systemLocale' => 'de_DE.utf8',
        'systemMaintainers' => [
            1,
        ],
    ],
];
