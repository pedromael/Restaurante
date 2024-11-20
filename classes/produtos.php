<?php
class produtos extends conectar
{
    public function __construct() {
        parent::__construct();
    }

    public function adicionar($dados) {
        $sql = $this->pdo->prepare("SELECT * FROM produtos WHERE nome = :n");
        $sql->bindValue(":n", $dados["nome"], PDO::PARAM_STR);
        $sql->execute();

        if($sql->rowCount() > 0) {return 0;}

        $sql = $this->pdo->prepare("INSERT INTO produtos(nome,preco,img,data)
        VALUES(:n,:p,:i,NOW())");
        $sql->bindValue(":n", $dados["nome"], PDO::PARAM_STR);
        $sql->bindValue(":p", $dados["preco"]);
        $sql->bindValue(":i", $dados["img"], PDO::PARAM_STR);
        if (!$sql->execute()) {return false;}

        return true;
    }

    public function buscar($dados = NULL) {
        if($dados == NULL){
            $sql = $this->pdo->prepare("SELECT * FROM produtos");
            $sql->execute();
        }else if(isset($dados['id'])){
            $sql = $this->pdo->prepare("SELECT * FROM produtos WHERE id_produto = :i");
            $sql->bindValue(":i", $dados['id']);
            $sql->execute();
        }

        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function remover($id) {
        $sql = $this->pdo->prepare("DELETE FROM produtos WHERE id_produto = :i");
        $sql->bindValue(":i", $id, PDO::PARAM_INT);
        if (!$sql->execute()) {return false;}

        return true;
    }
}
?>