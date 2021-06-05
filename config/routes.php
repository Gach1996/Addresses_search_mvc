<?php

return [
    'home/([0-9]+)' => 'home/index/$1',
    'home' => 'home/index',
    'import' => 'import/import',

    'search/([0-9]+)' => 'search/result/$1',
    'search' => 'home/search',

    '/' => 'home/index',
];

