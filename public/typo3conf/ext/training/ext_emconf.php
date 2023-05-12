<?php

/**
 * Extension Manager/Repository config file for ext "training".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'training',
    'description' => 'Training Formation',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Softtodo\\Training\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Afif Dhaw',
    'author_email' => 'afif.dhaw@softtodo.com',
    'author_company' => 'Softtodo',
    'version' => '1.0.0',
];
