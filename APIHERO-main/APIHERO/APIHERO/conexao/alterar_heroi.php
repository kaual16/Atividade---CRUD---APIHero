<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-alterar'])) {
		
		$ProNome = mysqli_escape_string($connection,$_POST['ProNome']);
		$ProCategoria = mysqli_escape_string($connection,$_POST['ProCategoria']);
		$ProMarca = mysqli_escape_string($connection,$_POST['ProMarca']);
		$ProPreco = mysqli_escape_string($connection,$_POST['ProPreco']);
		$ProEstoque = mysqli_escape_string($connection,$_POST['ProEstoque']);
		$ProCod = mysqli_escape_string($connection,$_POST['ProCod']);

		$sql = "UPDATE tbherois SET ProNome= '$ProNome', ProCategoria = '$ProCategoria', ProMarca = '$ProMarca', ProPreco = '$ProPreco',  WHERE ProCod = '$ProCod'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
