<?php
namespace models;
use PDO;

class Mes {
    public $banco;

    function __construct(){
        $this->banco = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
    }
    static function initDB(){
        $bancos = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
        $bancos->exec("CREATE TABLE IF NOT EXISTS mes(
            id INT AUTO_INCREMENT,
            mes INT (2),
            usuario INT,
            PRIMARY KEY (id),
            FOREIGN KEY (usuario) REFERENCES user(id)
        )");
    }
    public function list (){
        $db = $this->banco->prepare("SELECT * FROM mes");
        $select = $db->execute();
        return $select;
    }
}