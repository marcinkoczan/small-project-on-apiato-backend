<?php

namespace App\Containers\League\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LeagueModelRepository
 */
class LeagueModelRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
