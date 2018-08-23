<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TemplaVoilà! Plus for CS SEO',
    'description' => 'Integration of [clickstorm] SEO into TemplaVoilà! Plus.',
    'category' => 'misc',
    'version' => '0.2.2',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearCacheOnLoad' => 0,
    'author' => 'Alexander Opitz',
    'author_email' => 'opitz@pluspol-interactive.de',
    'author_company' => 'PLUSPOL interactive',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.3.99',
            'typo3' => '7.6.0-9.3.99',
            'templavoilaplus' => '7.1.3-7.99.99',
            'cs_seo' => '2.1.0-3.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Ppi\\PpiTemplavoilaplusCsseo\\' => 'Classes/',
        ],
    ],
];
