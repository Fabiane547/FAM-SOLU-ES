<?php
	session_start();
	include('pdo/pdo.class.php');
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	if(isset($_POST['btn_logar']))
	{
		$user = User($email, $password);
	}
	elseif(isset($_POST['btn_cadastrar']))
	{
		$user = Consult($email);
		if($user == NULL) {
			$user_insert = Insert($email, $password); 	
			$_SESSION['mensagem'] = $user_insert;

			header('location:index.php'); // Cadastro de cliente já cadastrado e retorno ao login
		} 
	}
	else
	{
		$user = NULL;
	};
	if($user == NULL){
	
	  	unset ($_SESSION['email']);
	  	unset ($_SESSION['senha']);
	  	unset ($_SESSION['mensagem']);
	  
	  	header('location:index.php'); // Entrada negada no sietma e retorno ao login		

	}elseif(isset($_POST['btn_logar'])){
	
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
	
		header('location:site/site.php'); // Entrada permitida no sistema 		
	
	}
	elseif(isset($_POST['btn_cadastrar'])){
		$_SESSION['mensagem'] = 'Já Cadastrado';
	
		header('location:index.php'); // Consulta de cliente já cadastrado e retorno ao login	

	}
	if($user_insert) {echo "cadastrado"; exit;}