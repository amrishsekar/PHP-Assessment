<?php

require 'controller/controller.php';

class router
{
    public $routes;
    public $system;

    public function __construct()
    {
        $this->system = new userController();
    }

    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' =>$controller,
            'method'=> 'POST'
        ];
    }

    public function route()
    {
        foreach ($this->routes as $route)
        {
            if ($route["uri"] === $_SERVER["REQUEST_URI"])
            {
                $action = $route["controller"];

                switch ($action)
                {
                    case "main":
                        $this->system->index();
                        break;
                    case "create":
                        $this->system->create($_POST, $_FILES);
                        break;
                    case "edit":
                        $this->system->edit($_POST);
                        break;
                    case "update":
                        $this->system->update($_POST, $_FILES);
                        break;
                    case "delete":
                        $this->system->delete($_POST);
                        break;
                }
            }
        }
    }
}