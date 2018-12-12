<?php

/**
 * @apiGroup           League
 * @apiName            deleteLeague
 *
 * @api                {DELETE} /v1/league/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('league/{id}', [
    'as' => 'api_league_delete_league',
    'uses'  => 'Controller@deleteLeague',
    'middleware' => [
      'auth:api',
    ],
]);
