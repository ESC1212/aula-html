<?php 
    function Connection(){
        $user="root";
        $senha="aluno";
        $database="DB";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function CheckC($connId){
        if($connId){
            echo "conectado";
        }else{
            echo "Erro ao conectar";
        }
    }

    //cadastro
    function insert($nome,$dataNasc,$telefone,$email){
        $db = Connection();
        $sql = "INSERT INTO usuario (nome,dataNasc,telefone,email) VALUES (?,?,?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$dataNasc);
        $stmt->bindValue(3,$telefone);
        $stmt->bindValue(4,$email);
        try{
            $stmt->execute();
        }catch(PDOException $e){
        }
    }

    //edição
    function update($nome,$dataNasc,$telefone,$email,$id){
        $db = Connection();

        $sql = "UPDATE usuario SET nome=?,dataNasc=?,telefone=?,email=? WHERE idusuario = ?";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$dataNasc);
        $stmt->bindValue(3,$telefone);
        $stmt->bindValue(4,$email);
        $stmt->bindValue(5,$id);
        try{
            $stmt->execute();
        }catch(PDOException $e){
        }
    }

    //para deletar o usuário com o id
    function delete($id){
        $db = Connection();

        $sql = "delete from usuario where idusuario = ?";
        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }

    //para preencher a lista
    function getUsuarios(){
        $db =Connection();
        $sql = "select * from usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }

    //para fazer pesquisa usando o nome
    function getUsuario($nome){
        $db =Connection();
        $sql = "select * from usuario where nome like '$nome%' ";
        $stmt = $db->prepare($sql);
        
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }

    //para edição
    function getUsuariobyid($id){
        $db =Connection();
        $sql = "select * from usuario where idusuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
?>