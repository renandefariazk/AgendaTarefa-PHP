<?php

class User {
    public $banco;

    function __construct(){
        $this->banco = new PDO("mysql:host=localhost;dbname=tarefas", "root", "");
    }
        // foreign key esta faltando
        // FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
        // ou renomeando
        // CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID)
        // REFERENCES Persons(PersonID)
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
        $select = $db->execute();
        return $select;
    }
    public function findOne($nome,$senha){
        $db = $this->banco->prepare("SELECT * FROM user WHERE nome = :nome and senha = :senha");
        $st = $db->banco->bindParam(":nome",$nome); 
        $st = $db->banco->bindParam(":senha",$senha);
        $exec = $st->execute();
        return $exec;
    }
}