<?php


class tarefasController {
    public $views;

    function index(){
        echo "tarefas Template";
        $this->render("tarefas");
    }

// funcion callback
    function content(){
        require_once "//views//".$this->views;
    }
    function render($views){
        require_once "//views//".$views;
    }
    function renderTemp($views,$template){
        require_once "//views//".$template;
        $this->views = "//views//".$views;
    }
}