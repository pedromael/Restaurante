<?php
include "../src/header.php";
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
	if(isset($_POST["log"])){
		if ($_GET['log'] == "false") {
			?><div class="alert error">email ou palavra passe errada</div><?php
		}else if($_GET['log'] == "vazio"){
			?><div class="alert error">preencha todas as abas</div><?php
		}else if($_GET['log'] == "true"){
			?><div class="alert true">entre com seus dados</div><?php
		}
	}
	?>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<!-- <div class="img">
			<img src="img/undraw_mobile_pay_9abj.svg">
		</div> -->
		<div class="login-content">
			<form method="POST" action="./">
				<h2 class="title">Bem-Vindo(a)</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-phone"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-mail</h5>
           		   		<input type="email" class="input" name="email_login">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" class="input"  name="pass">
            	   </div>
            	</div>
            	<a href="sig-in.php">criar uma conta</a>
            	<input type="submit" class="btn" value="Login" name="btn_logar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/login.js"></script>
</body>
</html>
<?php
$login = new login;

if (isset($_POST['email_login'])) {
	if (!(empty($_POST['email_login']) || empty($_POST['pass']))) {
		$dados = [
			"email" => $_POST['email_login'],
			"senha" => $_POST['pass']
		];
		if ($login->logar($dados)) {
			header("location: ../");
		}else{
			header("location: ./?log=false");
		}
	}else{
		header("location: ./?log=vazio");
	}
}
?>