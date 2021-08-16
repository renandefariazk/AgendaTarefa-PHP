<?php
namespace controller;

class homeController{

    public $template;

    function index(){
        $this->renderTemp("home.php","template.php");
    }
// funcion callback
    function content(){
        require_once $this->template;
    }
    function render($views){
        require_once "./views/".$views;
    }
    function renderTemp($views,$templates){
        $this->template = "./views/".$views;
        require_once "./views/".$templates;
    }
}