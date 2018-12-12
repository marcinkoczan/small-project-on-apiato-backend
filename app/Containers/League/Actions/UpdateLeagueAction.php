<?php

namespace App\Containers\League\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateLeagueAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $league = Apiato::call('League@UpdateLeagueTask', [$request->id, $data]);

        return $league;
    }
}
