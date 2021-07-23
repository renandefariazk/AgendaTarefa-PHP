<?php

class Dias {
    public $banco;

    function __construct(){
        $this->banco = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
    }
    public function list (){
        $db = $this->banco->prepare("SELECT * FROM dias");
        $select = $db->execute();
        return $select;
    }
}