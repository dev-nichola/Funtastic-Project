<?php

namespace DevFun\MVC\App;

class View
{
      public static function render(string $view, $data)
      {
            require __DIR__. "/../View/". $view . ".php";
      }

      public function redirect(string $url)
      {
            header("Location : $url");
      }
}
