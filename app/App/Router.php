<?php

namespace DevFun\MVC\App;


class Router
{
      private static array $routes = [];

      public static function add(string $http, string $path, string $controller, string $function, array $middlewares = []): void
      {
            self::$routes[] = [
                  "http" => $http,
                  "path" => $path,
                  "controller" => $controller,
                  "function" => $function,
                  "middleware" => $middlewares,
            ];
      }

      public static function run(): void
      {

            $path = "/";

            if (isset($_SERVER["PATH_INFO"])) {
                  $path = $_SERVER['PATH_INFO'];
            }

            $http = $_SERVER['REQUEST_METHOD'];

            foreach (self::$routes as $route) {
                  $pattern = "|^" . $route['path'] . "$|";
                  if (preg_match($pattern, $path, $variables) && $http == $route['http']) {

                        // call middleware
                        foreach($route['middleware'] as $middleware)
                        {
                              $instance = new $middleware;
                              $instance->before();
                        }
                          
                           $function  = $route['function'];

                           $controller = new $route['controller'];
                      

                        //    $controller->$function();
                        array_shift($variables);
                        call_user_func_array([$controller, $function], $variables);

                        return;
                  }
            }

            http_response_code(404);
            echo "Controller Not Found";
      }
}
