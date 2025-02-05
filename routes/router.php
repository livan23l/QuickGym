<?php

class Router
{
    private static $GET = [];
    private static $POST = [];

    private static function trimRoute($route)
    {
        return trim($route, "/");
    }

    public static function POST($route, $action)
    {
        Router::$POST[Router::trimRoute($route)] = $action;
    }

    public static function GET($route, $action)
    {
        Router::$GET[Router::trimRoute($route)] = $action;
    }

    public static function dispatch()
    {
        $uri = trim($_SERVER["REQUEST_URI"], "/");
        $method = $_SERVER["REQUEST_METHOD"];

        $pattern = "/(:[a-zA-Z]+)/";

        foreach(Router::$$method as $route => $action) {
            // Se analiza si la ruta tiene variables
            if (preg_match_all($pattern, $route, $variables)) {
                // Si las tiene, se crea una expresión regular para comparar con la URI
                $uri_pattern = "#^" . preg_replace($pattern, "([a-zA-Z0-9\-]+)", $route) . "$#";

                // Se compara el nuevo patrón con la URI
                if (preg_match($uri_pattern, $uri, $values)) {
                    // Si cumple con el patrón, se obtienen las variables de la URI
                    $temp = [];

                    foreach($variables[0] as $idx => $var) {
                        $temp[ltrim($var, ":")] = $values[$idx + 1];
                    }

                    // print_r($temp);
                    $action();
                    return;
                }
            } else {
                // Si no tiene variables se hace una comparación directa
                if ($uri == $route) {
                    $action();
                    return;
                }
            }
        }

        echo "404";
    }
}