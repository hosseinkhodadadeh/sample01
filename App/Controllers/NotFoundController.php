<?php
namespace App\Controllers;


use App\Components\Response;

class NotFoundController extends BaseController
{

    function execute(): Response
    {
        return new Response('App/Templates/404/404.php', []);
    }
}