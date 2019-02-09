<?php
namespace App\Controllers;
use App\Components\Response;

abstract class BaseController
{
    abstract function execute(): Response;
}