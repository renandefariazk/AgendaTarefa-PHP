<?php
namespace controller;
//model
require_once "./models/user.php";

use Exception;
use models\User;

class loginController {
    private $User;
    function __construct(){
        $this->User = new User;
    }
    public function login(){
        try{
            $conta = $this->User->findOne($_POST['login'],$_POST['senha']);
            if($conta->fetch()){
                session_start();
                $_SESSION["login"] = $_POST['login'];
                $_SESSION["senha"] = $_POST['senha'];
               header("Location:http://localhost/TarefasPHP/tarefas");
            } else{
                session_start();
                unset($_SESSION["login"]);
                unset($_SESSION["senha"]);
                header("Location:http://localhost/TarefasPHP");
                return json_encode(array("status"=>"404","error"=>"Senha ou Login Incorretos"));
            }
        }catch(Exception $e){
            return json_encode(array("status"=>"500","error"=>"Error Generico"));
        }
    }
    public function logout(){
        try{
            session_start();
            unset($_SESSION["login"]);
            unset($_SESSION["senha"]);
            header("Location:http://localhost/TarefasPHP");
        }catch(Exception $e){
            return json_encode(array("status"=>"500","error"=>"Error Generico"));
        }
    }
}