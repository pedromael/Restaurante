<?php
include "../src/header.php";
$login = new login;

if (isset($_POST['email_sig'])) {
	if (!(empty($_POST['telefone']) || empty($_POST['nome']) || empty($_POST['email_sig']) || empty($_POST['pass']) || empty($_POST['repPass']))) {
		if ($_POST['pass'] == $_POST['repPass']) {
			$dados = [
				"email" => $_POST['email_sig'],
				"telefone" => $_POST['telefone'],
				"nome" => $_POST['nome'],
				"senha" => $_POST['pass'],
				"indereco" => $_POST['indereco'],
				"tipo" => isset($_SESSION['user'])? "adm" : "normal"
			];

			if ($login->cadastrar($dados)) {

				if($dados['tipo'] == 'adm' && isset($_SESSION['user'])){
					header("location: ../adm/?cadastro=true");
				}
				header("location: ./?log=true");
			}else{
				header("location: sig-in.php?log=false");
			}
		}else{
			header("location: sig-in.php?log=senha");
		}
	}else{
		header("location: sig-in.php?log=vazio");
	}
}
?>