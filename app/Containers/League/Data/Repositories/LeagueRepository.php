<?php

namespace App\Containers\League\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LeagueRepository
 */
class LeagueRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
