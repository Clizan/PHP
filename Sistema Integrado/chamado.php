<html>
    <head>
        <title>Chamado </title>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Tag de redimensionameto -->
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <body>
        <form name = "chamado" method = "post" action = "">
            <!--Menu -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="chamado.php">Chamados</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatório</a>
                    </li>
                </ul>
            </nav>

            <div class="container p-3 my-3 border">

                <table id="incidentes" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Id</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Incidente</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Setor</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Informação</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Ação</td>
                        </tr>
                    </thead>

                        <?php

                            include 'conexao.php';

                            $sql = mysqli_query($conexao, "SELECT * FROM chamado");
                                    
                            while ($linha = mysqli_fetch_array($sql)){

                        ?>        

                    <tbody>				                       
                        <tr>
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["id"]?></td>                                
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["incidente"]?></td>
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["setor"]?></td> 
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["informacao"]?></td>
                            <td style = "font-family: verdana; font-size: 12px;"><input type = "button" value = "Editar" /></td>
                        </tr>
                    </tbody>  
    
                    <?php            
                        } 
                    ?>

                    
                    <script>//Script da table
                        $(document).ready(function() {
                        $('#incidentes').DataTable();
                        } );
                    </script>

                </table> 

                <div class="container p-3 my-3	" style = "background: #F0F8FF"><!--Div Rodapé -->		
				    <center>2020 © Todos os direitos reservados. Sistema desenvolvido por <a href="mailto:clizan-ws@hotmail.com"> Clizan Willian.</center>
			    </div>        

            </div>    
        </form>                           
    </body>
</html>