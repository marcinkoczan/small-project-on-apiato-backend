<?php

namespace App\Containers\League\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class GetAllLeaguesTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'id'
        ],
        'required'   => [
            'id'
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
