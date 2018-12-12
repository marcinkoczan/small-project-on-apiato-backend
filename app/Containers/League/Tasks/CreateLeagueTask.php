<?php

namespace App\Containers\League\Tasks;

use App\Containers\League\Data\Repositories\LeagueRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateLeagueTask extends Task
{

    protected $repository;

    public function __construct(LeagueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
