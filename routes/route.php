<?php

use DevFun\MVC\App\Router;
use DevFun\MVC\Controller\HomeController;

Router::add('GET', '/', HomeController::class, "index");


// method to run route
Router::run();
