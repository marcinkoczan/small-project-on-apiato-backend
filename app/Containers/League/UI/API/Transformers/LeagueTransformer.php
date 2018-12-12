<?php

namespace App\Containers\League\UI\API\Transformers;

use App\Containers\League\Models\LeagueAdministratorModel;
use App\Ship\Parents\Transformers\Transformer;

class LeagueTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param LeagueAdministratorModel $entity
     *
     * @return array
     */
    public function transform(LeagueAdministratorModel $entity)
    {
        $response = [
            'object' => 'League',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
