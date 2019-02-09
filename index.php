<?php

use App\Application;
//we defined these two constants to make our code easier to read
define('ROOT' , __DIR__);
define('DS' , DIRECTORY_SEPARATOR);
//now we are using autoloader to make our codee cleaner
require_once  './App/Autoloader.php';
\App\Autoloader::registerAutoLoad();

//We run the application and send the response back to user
$application = new Application();
$application->run();
