<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Clientes </title>
		<meta charset="utf-8"><!--Tag Usada para aceitar acentos -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Tag de redimensionameto -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--Estilos CSS -->
        <link rel="stylesheet" href="./estilos/estilo_customizado.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--Bibliotecas Ajax -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!--Bibliotecas Ajax -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script><!--Bibliotecas Ajax -->
		

		
		
		<script type="text/javascript"> <!--TAG Java Script para redirecionamento de Tela --> 
			function Add()
			{
				location.href=" cadastro.html" /*Redirecionamento para a página solicitada pelo button*/
			}				
	
			function List()
			{
				location.href=" inicio.html" /*Redirecionamento para a página solicitada pelo button*/
			}

			
		</script>		
    </head>
    <body>
        <form name = "cadastrar" method = "post" action = "">

            <div class="container p-3 my-3 border">		
                <button type="button" name = "btn_adduser" class="btn btn-dark" onClick = "Add()">Adicionar Usuários</button><!--Botão para redirecionamento de tela --> 
				<button type="button" name = "btn_listuser" class="btn btn-dark" onClick = "List()">Listar Usuários</button><!--Botão para redirecionamento de tela --> 
			

                <p><h6>Nome: </h6>
                <input type = "text" name = "nome" />
                <br /><!--Código para pular linha-->

                <h6>CPF: </h6> 
                <input type = "text" name = "cpf" />
                <br /><!--Código para pular linha-->

                <h6>Endereço:</h6> 
                <input type = "text" name = "endereco" />
                <br /><!--Código para pular linha-->

                <h6>Telefone:</h6> 
                <input type = "text" name = "telefone" />
                <br /><!--Código para pular linha-->

                <!--<input type = "submit" value = "CADASTRAR">-->
                <button type="submit" name = "btn_adduser" class="btn btn-dark">Cadastrar</button> <!--Botão com ação para cadastrar -->
				<button type="reset" name = "btn_listuser" class="btn btn-dark">Limpar</button> <!--Botão do tipo reset (limpar) -->

                <?php

                    include 'conexao.php';

                    if(isset($_POST['nome'])){

                        //Variaveis PHP
                        $nome     = $_POST['nome'];
                        $cpf      = $_POST['cpf'];
                        $endereco = $_POST['endereco'];
                        $telefone = $_POST['telefone'];

                        if(!empty($nome)){

                            $sql = mysqli_query($conexao, "INSERT INTO pessoa (nome, cpf, endereco, telefone) VALUES ('$nome', '$cpf', '$endereco', '$telefone')");
                        
                        }else{
                            echo "As variáveis não estão preenchidas!";
                        }    
                    }
                ?>
            </div> 

            <div class="container p-3 my-3	" style = "background: #F0F8FF"><!--Div Rodapé -->		
				<center>2020 © Todos os direitos reservados. Sistema desenvolvido por <a href="mailto:clizan-ws@hotmail.com"> Clizan Willian.</center>
			</div>

        </form>
    </body>
</html>