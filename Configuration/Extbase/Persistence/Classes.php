<?php
declare(strict_types = 1);

return [
    \GeorgRinger\News\Domain\Model\NewsDefault::class => [
        'subclasses' => [
            \GeorgRinger\Eventnews\Domain\Model\Location::class,
            \GeorgRinger\Eventnews\Domain\Model\Organizer::class,

        ]
    ],
    \GeorgRinger\Eventnews\Domain\Model\Location::class => [
        'tableName' => 'tt_address',
        'recordType' => \GeorgRinger\Eventnews\Domain\Model\Location::class,
        'title' => [
            'fieldName' => 'name'
        ],
        
    ],
    \GeorgRinger\Eventnews\Domain\Model\Organizer::class => [
        'tableName' => 'tt_address',
        'recordType' => \GeorgRinger\Eventnews\Domain\Model\Organizer::class,
        'properties' => [
            'title' => [
                'fieldName' => 'name'
            ],

        ],
    ],
];
