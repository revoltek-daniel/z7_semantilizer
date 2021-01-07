<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'The semantilizer',
    'description' => 'Gives more semantic control for the headlines of the content elements.',
    'category' => 'fe',
    'author' => 'zeroseven design studios GmbH',
    'author_email' => 'typo3@zeroseven.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '2.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.0.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'fluid_styled_content' => '',
            'dashboard' => ''
        ],
    ],
];
