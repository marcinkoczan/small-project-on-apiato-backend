<?php

namespace App\Containers\League\Tasks;

use App\Containers\League\Data\Repositories\LeagueRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateLeagueTask extends Task
{

    protected $repository;

    public function __construct(LeagueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
