<?php
namespace App\Controllers;

use App\Components\Response;

class IndexController extends BaseController
{

    function execute(): Response
    {
        return new Response(
            'App/Templates/index/index.php',
            [

            ]
        );
    }
}