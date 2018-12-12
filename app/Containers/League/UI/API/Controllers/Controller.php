<?php

namespace App\Containers\League\UI\API\Controllers;

use App\Containers\League\UI\API\Requests\CreateLeagueRequest;
use App\Containers\League\UI\API\Requests\DeleteLeagueRequest;
use App\Containers\League\UI\API\Requests\GetAllLeaguesByUserIdRequest;
use App\Containers\League\UI\API\Requests\GetAllLeaguesRequest;
use App\Containers\League\UI\API\Requests\FindLeagueByIdRequest;
use App\Containers\League\UI\API\Requests\UpdateLeagueRequest;
use App\Containers\League\UI\API\Transformers\LeagueTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\League\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateLeagueRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createLeague(CreateLeagueRequest $request)
    {
        $league = Apiato::call('League@CreateLeagueAction', [$request]);

        return $this->created($this->transform($league, LeagueTransformer::class));
    }

    /**
     * @param FindLeagueByIdRequest $request
     * @return array
     */
    public function findLeagueById(FindLeagueByIdRequest $request)
    {
        $league = Apiato::call('League@FindLeagueByIdAction', [$request]);

        return $this->transform($league, LeagueTransformer::class);
    }

    /**
     * @param GetAllLeaguesRequest $request
     * @return array
     */
    public function getAllLeagues(GetAllLeaguesRequest $request)
    {
        $leagues = Apiato::call('League@GetAllLeaguesAction', [$request]);

        return $this->transform($leagues, LeagueTransformer::class);
    }

    /**
     * @param UpdateLeagueRequest $request
     * @return array
     */
    public function updateLeague(UpdateLeagueRequest $request)
    {
        $league = Apiato::call('League@UpdateLeagueAction', [$request]);

        return $this->transform($league, LeagueTransformer::class);
    }

    /**
     * @param DeleteLeagueRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteLeague(DeleteLeagueRequest $request)
    {
        Apiato::call('League@DeleteLeagueAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param GetAllLeaguesByUserIdRequest $request
     * @return array
     */
    public function getAllLeaguesByUserId(GetAllLeaguesByUserIdRequest $request)
    {
        $leagues = Apiato::call('League@GetAllLeaguesByUserIdAction', [$request]);

        return $leagues;
    }

}
