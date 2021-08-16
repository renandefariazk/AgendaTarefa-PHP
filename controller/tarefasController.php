<?php
namespace controller;

class tarefasController {
    public $views;

    function index(){
        $this->render("tarefas.php");
    }
// funcion callback
    function content(){
        require_once "//views//".$this->views;
    }
    function render($views){
        require_once "./views/".$views;
    }
    function renderTemp($views,$template){
        require_once "//views//".$template;
        $this->views = "//views//".$views;
    }
}