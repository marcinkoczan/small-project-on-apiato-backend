<?php

namespace App\Containers\League\Tasks;

use App\Containers\League\Data\Repositories\LeagueRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteLeagueTask extends Task
{

    protected $repository;

    public function __construct(LeagueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
