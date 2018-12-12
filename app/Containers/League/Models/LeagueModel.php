<?php

namespace App\Containers\League\Models;

use App\Ship\Parents\Models\Model;

class LeagueModel extends Model
{

    const TABLE_NAME = 'league';

    const COLUMN_ID = 'id';
    const COLUMN_NAME = 'name';
    const COLUMN_AVATAR = 'avatar';
    const COLUMN_CREATED_AT = 'created_at';
    const COLUMN_UPDATED_AT = 'updated_at';
    const COLUMN_DELETED_AT = 'deleted_at';
    const COLUMN_CREATOR_ID = 'creator_id';

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
    protected $resourceKey = 'leaguemodels';
}
