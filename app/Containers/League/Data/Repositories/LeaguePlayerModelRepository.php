<?php

namespace App\Containers\League\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LeaguePlayerModelRepository
 */
class LeaguePlayerModelRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
