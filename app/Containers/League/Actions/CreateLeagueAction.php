<?php

namespace App\Containers\League\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateLeagueAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $league = Apiato::call('League@CreateLeagueTask', [$data]);

        return $league;
    }
}
