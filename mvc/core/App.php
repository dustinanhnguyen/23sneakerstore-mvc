<?php
class App
{


    protected $controller = "Home";
    protected $action = "index";
    protected $params = [];

    function __construct()
    {
        $arr = $this->UrlProcess();

        if (isset($arr[0]) && ($arr[0] == "admin" || $arr[0] == "Admin")) {
            if (isset($arr[1])) {

                $arr[1] = ucfirst($arr[1]) . 'Controller';

                if (file_exists("./mvc/controllers/admin/" . $arr[1] . ".php")) {
                    $this->controller = $arr[1];
                    unset($arr[1]);
                }
            } else {
                $this->controller = $this->controller . 'Controller';
            }
            require_once "./mvc/controllers/admin/" . $this->controller . ".php";
            
            $this->controller = new $this->controller;

            if (isset($arr[2])) {
                if (method_exists($this->controller, $arr[2])) {
                    $this->action = $arr[2];
                }
                unset($arr[2]);
            }


            call_user_func_array([$this->controller, $this->action], $this->params);

        } else {

            if (isset($arr[0])) {
                $arr[0] = ucfirst($arr[0]) . 'Controller';

                if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                    $this->controller = $arr[0];
                    unset($arr[0]);
                } else {
                    $this->controller = 'HomeController';
                }
            } else {
                $this->controller = $this->controller . 'Controller';
            }

            require_once "./mvc/controllers/" . $this->controller . ".php";

            $this->controller = new $this->controller;

            // Action
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            // Params
            $this->params = $arr ? array_values($arr) : [];

            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }

    function UrlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
