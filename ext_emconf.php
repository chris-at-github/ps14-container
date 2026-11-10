<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Ps14 Container',
    'description' => 'Container content elements with two and three columns based on b13/container.',
    'category' => 'fe',
    'author' => 'Christian Pschorr',
    'author_email' => 'pschorr.christian@gmail.com',
    'author_company' => '',
    'state' => 'beta',
    'version' => '14.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99',
            'container' => '4.1.0-4.99.99',
            'ps14_foundation' => '14.0.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
