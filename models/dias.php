<?php

namespace models;
use PDO;

class Dias {
    public $banco;

    function __construct(){
        $this->banco = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
    }
    static function initDB(){
        $bancoStatic = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
        $bancoStatic->exec("CREATE TABLE IF NOT EXISTS dias(
            id INT AUTO_INCREMENT,
            dia INT (2),
            mes INT (2),
            PRIMARY KEY (id),
            FOREIGN KEY (id) REFERENCES mes(id)
        )");
    }
    public function list (){
        $db = $this->banco->prepare("SELECT * FROM dias");
        $select = $db->execute();
        return $select;
    }
}