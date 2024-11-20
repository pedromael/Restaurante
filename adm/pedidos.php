<?php
include "../src/header.php";
$pedidos = new process();
if($_SESSION['user_tipe'] != 'adm'){
    header('location: ../');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Pedidos</title>
</head>
<body>
    <div class="container">
        <?php
        foreach ($pedidos as $key) {
            ?>
            <div class="row">
                <div class="nome col"><?=$key['nome']?></div>
                <div class="data col"><?=$key['data']?></div>
                <div class="dinheiro col"><?=$key['total_dinheiro']?><span><?=$key['metodo_pagamento']?></span></div>
                <div class="status col"><?=$key['status']?></div>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>