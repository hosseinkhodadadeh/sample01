<?php
namespace App;

use App\Controllers\BaseController;
use App\Controllers\IndexController;
use App\Controllers\NotFoundController;

final class Application
{
    public function run()
    {
        //We have to find a proper controller to run our application
        $controller = $this->findController();
        $response = $controller->execute();
        $response->sendResponse();
    }

    /**
     * @return BaseController
     *
     */
    private function findController(): BaseController
    {
        //if user has opened the index page
        if (empty($_REQUEST['action'])) {
            return new IndexController();
        }
        $action = $_REQUEST['action'];
        $controllerClass = 'App\\Controllers\\' . ucfirst($action) . 'Controller';
        if (class_exists($controllerClass)) {
            return new $controllerClass;
        }
        //Nothing good was found. Send not found
        return new NotFoundController();
    }

}