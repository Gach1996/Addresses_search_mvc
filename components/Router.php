<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/../config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     *  Returns request string
     */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            $fullUri = trim($_SERVER['REQUEST_URI'], '/');
            $demofullUri = $fullUri;
            $count = explode('/', $demofullUri);

            $fullUri = array_slice(explode('/', $fullUri), 1);

            if (count($fullUri) === 0) {
                $fullUri[] = '/';
            }

            $uri = implode('/', $fullUri);

            if (isset($_SERVER['QUERY_STRING'])) {
                $url = explode('?', $uri);
                $uri = $url[0];
            }

            return str_replace('public/', '', $uri);
        } else {
            return ['/'];
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                $controllerFile = ROOT . '/../controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}

?>
