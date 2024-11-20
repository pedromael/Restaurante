<?php
class login extends conectar
{
    public function __construct(){
        parent::__construct();
    }
    public function logar($dados):bool {

        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":s", md5($dados['senha']));
        $sql->bindValue(":e", $dados['email']);
        if(!$sql->execute()){
            return false;
        }

        if ($sql->rowCount() > 0) {
            $fetch = $sql->fetch();
            $_SESSION['user'] = $fetch['id_user'];
            $_SESSION['user_tipe'] = $fetch['tipo'];
        }else{
            return false;
        }

        return true;
    }   
    
    public function cadastrar($dados):bool {
        $sql =  $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $dados['email']);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }

        $sql = $this->pdo->prepare("INSERT INTO usuarios(nome,email,telefone,indereco,senha,tipo,data)
        VALUES(:n, :e, :t, :i, :s, :ti, NOW())");
        $sql->bindValue(":n", $dados['nome']);
        $sql->bindValue(":e", $dados['email']);
        $sql->bindValue(":t", $dados['telefone']);
        $sql->bindValue(":i", $dados['indereco']);
        $sql->bindValue(":ti", $dados['tipo']);
        $sql->bindValue(":s", md5($dados['senha']));
        if(!$sql->execute()){
            return false;
        }

        return true;
    }
}

?>