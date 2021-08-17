<?php
namespace controller;
//model
require_once "./models/user.php";

use models\User;

class loginController {
    private $User;
    function __construct(){
        $this->User = new User;
    }
    function login(){
        // colocar em um try catch e usar Exception
        // onde coloca o $_POST['login']
        // onde coloca o $_POST['senha']
        $conta = $this->User->findOne($_POST['login'],$_POST['senha']);
        if($conta){
            // abrir uma section $_SESSION[]
            // session_start();
            // $_SESSION["login"] = $_POST['login'];
            // $_SESSION["senha"] = $_POST['senha'];
           header("Location:http://localhost/TarefasPHP/tarefas");
        } else{
            return "senha ou login incorretos";
        }
    }
}