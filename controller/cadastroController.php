<?php

namespace controller;
require_once "models/user.php";

use Exception;
use \models\User;

class cadastroController{
    private $User;
    function __construct(){
        $this->User = new User;
    }
    public function cadastrar(){
        try{
            $nome = $_POST["login"];
            $senha = $_POST["password"];
            if($this->User->findOne($nome,$senha)){
                throw new Exception("Esta conta ja Existe");
            }else{
                $this->User->create($nome,$senha);
                return json_encode(array("status"=>"200","messsage"=>"Cadastro Realizado"));
            }
        }catch(Exception $e){
            if($e->getMessage() == "Esta conta ja Existe"){
                return json_encode(array("status"=>"409","messagem"=>$e->getMessage()));
            } else{
                return json_encode(array("status"=>"500","messagem"=>"Erro Generico"));
            }
        }
    }
}