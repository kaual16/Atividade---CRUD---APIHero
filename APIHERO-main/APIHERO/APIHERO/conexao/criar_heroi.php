<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$ProNome= mysqli_escape_string($connection,$_POST['ProNome']);
		$ProCategoria = mysqli_escape_string($connection,$_POST['ProCategoria']);
		$ProMarca = mysqli_escape_string($connection,$_POST['ProMarca']);
		$ProPreco  = mysqli_escape_string($connection,$_POST['ProPreco']);
		$ProEstoque = mysqli_escape_string($connection,$_POST['ProEstoque']);

		$sql = "INSERT INTO tbherois(nomePro,categoriaPro,marcaPro,precoPro,estoquePro)
		VALUES('$ProNome','$ProCategoria','$ProMarca','$ProPreco','$ProEstoque')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
