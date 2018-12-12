<?php

namespace App\Containers\League\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteLeagueAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('League@DeleteLeagueTask', [$request->id]);
    }
}
