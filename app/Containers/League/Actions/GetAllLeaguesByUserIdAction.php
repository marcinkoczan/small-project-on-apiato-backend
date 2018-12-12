<?php

namespace App\Containers\League\Actions;

use App\Containers\League\Models\LeagueModel;
use App\Containers\League\Models\LeaguePlayerModel;
use App\Containers\League\UI\API\Requests\GetAllLeaguesByUserIdRequest;
use App\Ship\Parents\Actions\Action;

class GetAllLeaguesByUserIdAction extends Action
{

    public function run(GetAllLeaguesByUserIdRequest $request)
    {
        $result = [];

        $myLeagues = $this->getUserCreatedLeagues($request->id);

        $leaguesWhereUserIsPlayer = $this->getLeaguesWhereUserIsPlayer($request->id);

        return array_merge($myLeagues, $leaguesWhereUserIsPlayer);
    }

    /**
     * @param int $userId
     * @return array
     */
    private function getUserCreatedLeagues(int $userId): array
    {
        $leagues = [];

        $leaguesInDatabase = LeagueModel::where(LeagueModel::COLUMN_CREATOR_ID, $userId)->get();

        foreach ($leaguesInDatabase as $league) {
            $leagues[] = [
                LeagueModel::COLUMN_ID => $league->{LeagueModel::COLUMN_ID},
                LeagueModel::COLUMN_NAME => $league->{LeagueModel::COLUMN_NAME}
            ];
        }

        return $leagues;
    }

    /**
     * @param int $userId
     * @return array
     */
    private function getLeaguesWhereUserIsPlayer(int $userId): array
    {
        $leagues = [];

        $leaguesInDatabase = LeaguePlayerModel
            ::join(LeagueModel::TABLE_NAME, LeaguePlayerModel::TABLE_NAME . '.' . LeaguePlayerModel::COLUMN_LEAGUE_ID, '=', LeagueModel::TABLE_NAME . '.' . LeagueModel::COLUMN_ID)
            ->where(LeaguePlayerModel::COLUMN_USER_ID, $userId)
            ->select(LeagueModel::TABLE_NAME . '.' . LeagueModel::COLUMN_ID, LeagueModel::TABLE_NAME . '.' . LeagueModel::COLUMN_NAME)
            ->getQuery()
            ->get();

        foreach ($leaguesInDatabase as $league) {
            $leagues[] = [
                LeagueModel::COLUMN_ID => $league->id,
                LeagueModel::COLUMN_NAME => $league->name
            ];
        }

        return $leagues;
    }
}
