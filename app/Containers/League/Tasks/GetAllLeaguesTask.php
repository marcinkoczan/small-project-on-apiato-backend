<?php

namespace App\Containers\League\Tasks;

use App\Containers\League\Data\Repositories\LeagueRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllLeaguesTask extends Task
{

    protected $repository;

    public function __construct(LeagueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
