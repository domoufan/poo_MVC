<?php

namespace PooMvc\Core;

use PooMvc\Exception\RouteNotFound;

class Router
{

    private Request $request;

    public function __construct()
    {
        $this->request = new Request;
    }

    private array $routes = [];

    public function route(string $uri, array $action)
    {
        $this->routes[$uri] = $action;
    }
    public function resolve()
    {
        $uri = $this->request->getUri()[0];
        if (isset($this->routes[$uri])) {
            $route = $this->routes[$uri];
            //operateur de destruction
            [$ctrClass, $action] = $route;
            //operateur de destruction equivalent aux deux instructions
            //$ctrClass = $route[O]
            //$action = $route[1]
            if (class_exists($ctrClass) && method_exists($ctrClass, $action)) {
                $ctrl = new $ctrClass($this->request); // $ctrl = new SecurityController;
                //$ctrl->{$action()}; // $ctrl->{$authentification()};
                // Vue accessible sans connexion
                //Pour que toute les pages accesibles ajouter * dans le tableau
                $free = ["SecurityController/authentification"];
                $freetest = explode("\\",$ctrl::class)[2]."/".$action;
                if (in_array("*",$free) || in_array($freetest, $free)) {
                    // les pages acessibles par tous
                    call_user_func(array($ctrl, $action));

                } elseif (Session::is_connect()) {
                    call_user_func(array($ctrl, $action));
                    
                }else{
                    throw new RouteNotFound();
                    
                }
            } else {
                throw new RouteNotFound();
            }
        } else {
            throw new RouteNotFound();
        }
    }
}
