CREATE DATABASE IF NOT EXISTS BD_Sistema;
USE BD_Sistema;

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(20),
    endereco TEXT,
    senha CHAR(32) NOT NULL, -- md5
    tipo ENUM('admin', 'cliente', 'outro') DEFAULT 'cliente',
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de produtos
CREATE TABLE IF NOT EXISTS produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE,
    preco DECIMAL(10, 2) NOT NULL,
    img VARCHAR(255),
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de pedidos
CREATE TABLE IF NOT EXISTS pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    data DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES usuarios(id_user)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

-- Tabela de produtos selecionados (itens do pedido)
CREATE TABLE IF NOT EXISTS produtos_selecionado (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT NOT NULL,
    qtd INT NOT NULL,
    id_pedido INT NOT NULL,
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);
