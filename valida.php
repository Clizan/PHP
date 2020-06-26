<html>
	<head>
		<title> </title>

		<script type="text/javascript">
			/*Comando JavaScript para redirecionar páginas*/
			function loginsuccessfully (){
				setTimeout("window.location='cadastro.php'", 1000);	
			}

			function loginfailed (){
				setTimeout("window.location='index.php'");
			}
		</script>
	</head>

<body>
<?php

	include 'conexao.php';/*Incluindo a classe Conexão*/

	//Variaveis PHP
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	$sql     = mysqli_query($conexao, "SELECT * FROM usuario WHERE usuario ='$usuario' and senha = '$senha'") or die (mysqli_error());
	$row     = mysqli_num_rows($sql);

	if($row > 0) {
			session_start();
			$_SESSION['usuario']=$_POST['usuario'];
			$_SESSION['senha']=$_POST['senha'];
			echo "<script>loginsuccessfully()</script>";
			echo "Aguarde um momento!";
	}else{
		echo "<script>alert('Usuario ou senha invalida!');</script>";
		echo "<script>loginfailed()</script>";
	}
?>

</body>
</html>
