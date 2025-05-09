<?php
session_start();
if (isset($_POST['new_adm']) && $_SESSION['user_tipe'] == 'adm') {
	# code...
}else{
	if (isset($_SESSION['user'])) {
		session_destroy();
		unset($_SESSION['user']);
		session_start();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="img/icon.svg"/>
	<title>Formulário de Login</title>
	<link rel="stylesheet" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		if ($_GET['log'] == "false") {
			?><div class="alert error">ja existe uma conta com esse email</div><?php
		}else if($_GET['log'] == "vazio"){
			?><div class="alert error">preencha todas as abas</div><?php
		}else if($_GET['log'] == "senha"){
			?><div class="alert error">senha e confirmar senha nao coincidem</div><?php
		}
	?>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<!-- <div class="img">
			<img src="img/undraw_mobile_pay_9abj.svg">
		</div> -->
		<div class="login-content">
			<form method="post" action="action.php">
				<h2 class="title">Bem Vindo(a)</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-phone"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input"  name="email_sig">
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input"  name="nome">
           		   </div>
           		</div>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                            <h5>Numero de telefone</h5>
                            <input type="number" class="input"  name="telefone">
                    </div>
                </div>
				<div class="input-div one">
                    <div class="i">
                            <i class="fas fa-map"></i>
                    </div>
                    <div class="div">
                            <h5>indereço</h5>
                            <input type="text" class="input"  name="indereco">
                    </div>
                </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" class="input" name="pass">
            	   </div>
            	</div>
                <div class="input-div pass">
                    <div class="i">
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>repetir senha</h5>
                            <input type="password" class="input"  name="repPass">
                    </div>
                 </div>
            	<a href="./">Ja tenho uma conta</a>
            	<input type="submit" class="btn" value="Cadastrar" name="btn_cadastrar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/login.js"></script>
</body>
</html>