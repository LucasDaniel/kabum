<?php

namespace App\Core;

use App\Http\Request;
use App\Http\Response;
use App\Http\Middleware;

class Core {

    public static function dispatch(array $routes) {
        $routeLibrary = 'src/Library';

        $prefixController = 'App\\Controllers\\';
        
        $routeFound = false;
        
        $url = '/';
        isset($_GET['url']) && $url .= $_GET['url'];
        $url !== '/' && $url = rtrim($url, '/');        

        if (!str_contains($url,$routeLibrary)) {
            foreach($routes as $route) {
                $pattern = '#^'.preg_replace('/{id}/','([\w-]+)',$route['path']).'$#';
                if (preg_match($pattern, $url, $matches)) {

                    array_shift($matches);

                    $routeFound = true;

                    if($route['method'] !== Request::method()) {
                        Response::json([
                            'error' => true,
                            'success' => false,
                            'message' => "Method not",
                        ],405);
                        return;
                    }

                    if($route['middleware']) self::middleware();

                    [$controller, $action] = explode('@', $route['action']);
                    $controller = $prefixController.$controller;
                    $extendController = new $controller();
                    $extendController->$action(new Request, $matches);
                }
            }

            if (!$routeFound) {
                $controller = $prefixController.'NotFoundController';
                $extendController = new $controller();
                $extendController->index(new Request);
            }
        } else {
            $url = $_ENV['DB_HOST'].$url;
            include($url);
        }
    }

    private static function middleware() {
        Middleware::verifyToken();
    }
        
}
