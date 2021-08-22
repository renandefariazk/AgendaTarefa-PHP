<?php

namespace models;
use PDO;

class User {
    public $banco;

    function __construct(){
        $this->banco = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
    }
    static function initDB(){
        $bancos = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
        $bancos->exec("CREATE TABLE IF NOT EXISTS user(
            id INT AUTO_INCREMENT,
            nome VARCHAR (11),
            senha INT (11) NOT NULL,
            PRIMARY KEY (id)
        )");
    }
    public function list (){
        $db = $this->banco->prepare("SELECT * FROM user");
        $db->execute();
        return $db->fetch();
    }
    public function findOne($nome,$senha){
        $db = $this->banco->prepare("SELECT * FROM user WHERE nome = :nome and senha = :senha");
        $st = $db->banco->bindParam(":nome",$nome); 
        $st = $db->banco->bindParam(":senha",$senha);
        $exec = $st->execute();
        return $exec->fetch();
    }
    public function create($nome,$senha){
        $usuario = $this->banco->prepare("INSERT INTO user SET nome = :nome, senha = :senha");
        $usuario->bindParam("nome",$nome);
        $usuario->bindParam("senha",$senha);
        $usuario->execute();
    }
}