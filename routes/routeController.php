<?php
namespace routes;

require_once "./controller/homeController.php";

class routeController{
    private $route;
    function __construct(){
        $this->initRoute();
        $this->run($this->getURL());

    }
    function initRoute(){
        $this->route['/TarefasPHP/'] = array("controller"=>"homeController","action"=>"index");
        $this->route['/TarefasPHP/tarefas/'] = array("controller"=>"tarefasController","action"=>"index");
        // nao esta funcionando vazio
        $this->route['/'] = array("controller"=>"homeController","action"=>"index");
    }
    function run($url){
        if(array_key_exists($url, $this->route)){
            $class = '\\controller\\'. $this->route[$url]['controller'];
            $controller = new $class;
            $action = $this->route[$url]['action'];
            $controller->$action();
        }
    }
    function getURL(){
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}