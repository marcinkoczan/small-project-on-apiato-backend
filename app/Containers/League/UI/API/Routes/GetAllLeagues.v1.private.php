<?php

/**
 * @apiGroup           League
 * @apiName            getAllLeagues
 *
 * @api                {GET} /v1/league Endpoint title here..
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
$router->get('league', [
    'as' => 'api_league_get_all_leagues',
    'uses'  => 'Controller@getAllLeagues',
    'middleware' => [
      'auth:api',
    ],
]);
