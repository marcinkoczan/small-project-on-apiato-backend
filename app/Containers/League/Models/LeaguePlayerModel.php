<?php

namespace App\Containers\League\Models;

use App\Ship\Parents\Models\Model;

class LeaguePlayerModel extends Model
{
    const TABLE_NAME = 'league_player';

    const COLUMN_ID = 'id';
    const COLUMN_LEAGUE_ID = 'league_id';
    const COLUMN_USER_ID = 'user_id';
    const COLUMN_CREATED_AT = 'created_at';
    const COLUMN_UPDATED_AT = 'updated_at';
    const COLUMN_DELETED_AT = 'deleted_at';

    protected $table = self::TABLE_NAME;

    protected $fillable = [

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'leagueplayermodels';
}
