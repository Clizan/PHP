<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./estilos/estilo_customizado.css">
	<title>Logiin</title>
</head>
<body>
	<form id="login" method="post" action="valida.php">
		<h1>Log In</h1>
		<fieldset id = "inputs">
			<input id = "username" name = "usuario" type = "text"     placeholder = "Usuário" autofocus="" required="">   
			<input id = "password" name = "senha"   type = "password" placeholder = "Senha" required="">
		</fieldset>
		<fieldset id = "actions">
			<input type = "submit" id = "submit" value = "Entrar">
		</fieldset>			
	</form>
</body>
</html>