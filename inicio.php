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
			location.href=" cadastro.php" /*Redirecionamento para a página solicitada pelo button*/
		}				
	            
		function List()
		{
			location.href=" inicio.php" /*Redirecionamento para a página solicitada pelo button*/
		}
			
		</script>		
    </head>
    <body>
        <form name = "cadastrar" method = "post" action = "">

            <div class="container p-3 my-3 border">		
                <button type="button" name = "btn_adduser" class="btn btn-dark" onClick = "Add()">Adicionar Usuários</button><!--Botão para redirecionamento de tela --> 
				<button type="button" name = "btn_listuser" class="btn btn-dark" onClick = "List()">Listar Usuários</button><!--Botão para redirecionamento de tela --> 

                <div  id = "table" style = "padding: 20px;">
                    <table class = "table table-dark table-hover">
                            <thead>
                                <tr>
                                    <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Nome</td>
                                    <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">CPF</td>
                                    <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Endereço</td>
                                    <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Telefone</td>
                                </tr>
                            </thead>
                        
                    <?php
                        /*Consulta Banco de dados*/
                        include 'conexao.php';

                        $sql = mysqli_query($conexao, "SELECT * FROM Pessoa");
                        
                        while ($linha = mysqli_fetch_array($sql)){
                    ?>

                        <tbody>				                       
                            <tr>
                                <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["nome"]?></td>
                                <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["cpf"]?></td>
                                <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["endereco"]?></td>
                                <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["telefone"]?></td>		
                            </tr>                    
                        </tbody>         
                    <?php 
                    }
                    ?>

                    </table>

                </div><!--div table -->      
            </div> 

            <div class="container p-3 my-3	" style = "background: #F0F8FF"><!--Div Rodapé -->		
				<center>2020 © Todos os direitos reservados. Sistema desenvolvido por <a href="mailto:clizan-ws@hotmail.com"> Clizan Willian.</center>
			</div>

        </form>
    </body>
</html>