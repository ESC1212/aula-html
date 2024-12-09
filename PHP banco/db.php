<?php 
    function conecta(){
        $user="root";
        $senha="aluno";
        $database="romulo";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function chekConexao($connId){
        if($connId){
            echo "conectado";
        }else{
            echo "não foi possivel conectar";
        }
    }
    chekConexao(conecta());
    var_dump(conecta());
?>