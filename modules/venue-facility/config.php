<?php

return [
    '__name' => 'venue-facility',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/venue-facility.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/venue-facility' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'venue' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'VenueFacility\\Model' => [
                'type' => 'file',
                'base' => 'modules/venue-facility/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'venue-facility-chain' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'vanue_facility' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'VenueFacility\\Library\\VenueFacility',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue-facility'
                ],
                'venue' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'Venue\\Model\\Venue',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'venue-facility' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'venue' => [
                'facility' => [
                    'type' => 'chain',
                    'chain' => [
                        'model' => [
                            'name' => 'VenueFacility\\Model\\VenueFacilityChain',
                            'field' => 'venue'
                        ],
                        'identity' => 'venue_facility'
                    ],
                    'model' => [
                        'name' => 'VenueFacility\\Model\\VenueFacility',
                        'field' => 'id'
                    ],
                    'format' => 'venue-facility'
                ]
            ]
        ]
    ]
];