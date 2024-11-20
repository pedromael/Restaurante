

<?php
class process extends conectar
{
    public function __construct(){
        parent::__construct();
    }
    public function fazer_pedido() {
        try {
            // Inicia uma transação
            $this->pdo->beginTransaction();
    
            // Insere o pedido e obtém o último ID
            $sql = $this->pdo->prepare("INSERT INTO pedidos (id_user, data) VALUES (:i, NOW())");
            $sql->bindValue(":i", $_SESSION['id_user']);
            $sql->execute();
    
            $id_pedido = $this->pdo->lastInsertId();
    
            // Verifica se há produtos no carrinho
            if (!empty($_SESSION['cesta'])) {
                foreach ($_SESSION['cesta'] as $value) {
                    // Valida os dados antes de inserir
                    if (!isset($value['id_produto'], $value['qtd'])) {
                        throw new Exception("Dados do produto inválidos no carrinho.");
                    }
    
                    // Insere os produtos do pedido
                    $sql = $this->pdo->prepare("INSERT INTO produtos_selecionado (id_produto, qtd, id_pedido)
                                                VALUES (:pr, :qpr, :p)");
                    $sql->bindValue(":pr", $value['id_produto']);
                    $sql->bindValue(":qpr", $value['qtd']);
                    $sql->bindValue(":p", $id_pedido);
                    $sql->execute();
                }
            } else {
                throw new Exception("Carrinho vazio.");
            }
    
            $this->pdo->commit();
            return true;
    
        } catch (Exception $e) {
            $this->pdo->rollBack();
            error_log("Erro ao fazer pedido: " . $e->getMessage());
            return false;
        }
    }

    public function pegar_pedidos(): array{
        return [];
    }
    
}

?>