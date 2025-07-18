<?php

return [
    'root' => [
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__.'/../../',
        'aliases' => [],
        'reference' => null,
        'name' => 'somecode/php-framework',
        'dev' => true,
    ],
    'versions' => [
        'laravel/pint' => [
            'pretty_version' => 'v1.22.1',
            'version' => '1.22.1.0',
            'type' => 'project',
            'install_path' => __DIR__.'/../laravel/pint',
            'aliases' => [],
            'reference' => '941d1927c5ca420c22710e98420287169c7bcaf7',
            'dev_requirement' => true,
        ],
        'nikic/fast-route' => [
            'pretty_version' => 'v1.3.0',
            'version' => '1.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__.'/../nikic/fast-route',
            'aliases' => [],
            'reference' => '181d480e08d9476e61381e04a71b34dc0432e812',
            'dev_requirement' => false,
        ],
        'somecode/php-framework' => [
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__.'/../../',
            'aliases' => [],
            'reference' => null,
            'dev_requirement' => false,
        ],
        'symfony/deprecation-contracts' => [
            'pretty_version' => 'v3.6.0',
            'version' => '3.6.0.0',
            'type' => 'library',
            'install_path' => __DIR__.'/../symfony/deprecation-contracts',
            'aliases' => [],
            'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
            'dev_requirement' => true,
        ],
        'symfony/polyfill-mbstring' => [
            'pretty_version' => 'v1.32.0',
            'version' => '1.32.0.0',
            'type' => 'library',
            'install_path' => __DIR__.'/../symfony/polyfill-mbstring',
            'aliases' => [],
            'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
            'dev_requirement' => true,
        ],
        'symfony/var-dumper' => [
            'pretty_version' => 'v7.3.0',
            'version' => '7.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__.'/../symfony/var-dumper',
            'aliases' => [],
            'reference' => '548f6760c54197b1084e1e5c71f6d9d523f2f78e',
            'dev_requirement' => true,
        ],
    ],
];
