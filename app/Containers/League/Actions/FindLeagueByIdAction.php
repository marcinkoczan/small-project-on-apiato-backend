<?php

namespace App\Containers\League\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindLeagueByIdAction extends Action
{
    public function run(Request $request)
    {
        $league = Apiato::call('League@FindLeagueByIdTask', [$request->id]);

        return $league;
    }
}
