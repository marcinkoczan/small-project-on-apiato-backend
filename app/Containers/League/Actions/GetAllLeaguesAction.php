<?php

namespace App\Containers\League\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllLeaguesAction extends Action
{
    public function run(Request $request)
    {
        $leagues = Apiato::call('League@GetAllLeaguesTask', [], ['addRequestCriteria']);

        return $leagues;
    }
}
