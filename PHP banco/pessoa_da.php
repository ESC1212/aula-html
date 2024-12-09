<?php 
    include_once("db.php");
    
    function save($nome,$email){
        $db = conecta();

        $sql = "insert into usuario (nome,email) values (?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$email);
        $stmt->execute();
    }

    function getUsuarios(){
        $db =conecta();
        $sql = "select * from usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }
    function getUsuario($id){
        $db =conecta();
        $sql = "select * from usuario where idusuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    getUsuarios();
?>