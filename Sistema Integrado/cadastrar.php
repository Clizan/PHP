<!DOCTYPE html>
<html lang="br">
    <head>
        <title>Cadastrar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Tag de redimensionameto -->
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form name = "cadastrar" method = "post" action = "">
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
        
                <p><h6>Incidente: </h6>
                <input type = "text" name = "incidente" autofocos ="" required=""/>

                <h6>Area: </h6>  
                    <select name = "setor" style = "width: 100%; padding: 12px 20px; margin: 4px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
                        <option value = "gmud">GMUD</option>
                        <option value = "movel">MÓVEL</option>
                        <option value = "optico">ÓPTICO</option>
                    </select>

                <h6>Informações:</h6> 
                <textarea class="form-control" rows="5" name = "info" style = "width: 100%; padding: 12px 20px; margin: 4px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"></textarea>
                
                <?php // Banco de dados
                
                    include 'conexao.php';
                
                    if(isset($_POST['incidente'])){

                        //Variaveis PHP
                        $incidente  = $_POST['incidente'];
                        $setor      = $_POST['setor'];
                        $informacao = $_POST['info'];

                        if(!empty($incidente)){

                            $sql = mysqli_query($conexao, "INSERT INTO chamado (incidente, setor, informacao) VALUES ('$incidente', '$setor ', '$informacao')");
                            
                            echo  "<script>alert('Cadastro realizado com sucesso!');</script>";

                        }else{
                            echo "As variáveis não estão preenchidas!";
                        }    
                    }                
                ?>

                <!--<input type = "submit" value = "CADASTRAR">-->
                <button type="submit" name = "btn_adduser" class="btn btn-dark">Cadastrar</button> <!--Botão com ação para cadastrar -->
				<button type="reset" name = "btn_listuser" class="btn btn-dark">Limpar</button> <!--Botão do tipo reset (limpar) -->
            </div>

            <div class="container p-3 my-3	" style = "background: #F0F8FF"><!--Div Rodapé -->		
				<center>2020 © Todos os direitos reservados. Sistema desenvolvido por <a href="mailto:clizan-ws@hotmail.com"> Clizan Willian.</center>
			</div>

        </form>
    </body>
</html>