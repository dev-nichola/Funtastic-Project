<?php

namespace DevFun\MVC\Controller;

use DevFun\MVC\App\View;

class HomeController
{

      function index(): void
      {

            $data = [
                  "title" => "Funtastic",
                  "name" => "Funtastic",
            ];

            View::render("welcome", $data);
      }


     
}
