<!DOCTYPE html><!--Método que incida a utilização do HTML 5 -->
<html lang="br"><!--Tag de inicialização do HTML -->
 <head>
  <title>Menu</title>
  <meta charset="UTF-8"><!--Padronização de caracteres -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Tag de redimensionamento-->
  <link rel="stylesheet" href="../css/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>
 
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
   <ul class="navbar-nav">

    <li class="nav-item">
     <a class="nav-link" href="menu.php"><img id="homeImage" src="../images/home.png"></a>
    </li>

    <li class="nav-item active">
     <a class="nav-link" id="cadastrar" href="cadastrarChamado.php">Cadastrar</a>
    </li>
                      
    <li class="nav-item">
     <a class="nav-link" href="relatorio.php">Relatório</a>
    </li>
   
   </ul>
  
  </nav>

  <div id="chamadosCadadstrados" class="container-fluid">

   <div id="informacaoTabela">

    <table class="table table-sm table-striped table-bordered">

     <thead class="table-dark"> 
        
      <tr>

       <th class="tituloTabelaChamado">CHAMADO</th>
       <th class="tituloTabelaChamado">RAL</th>
       <th class="tituloTabelaChamado">SETOR</th>
       <th class="tituloTabelaChamado">DATA</th>
       <th class="tituloTabelaChamado">INFORMAÇÃO</th>
       <th class="tituloTabelaChamado">ATUALIZAÇÃO</th>
       <th class="tituloTabelaChamado">AÇÃO</th>

      </tr>

     </thead>

     <tbody>
     
      <tr id="estiloLinhaTabela">

       <?php 
        #conectando a classe de conexao
        include_once '../model/conexao.php';

        #realizando a consulta dos chamado já abertos
        $sql = mysqli_query($conexao, "SELECT * FROM integrado.chamado ch");

        foreach($sql as $obj => $index){       
       ?>

         <td class="infoConsulta"><?php echo $index['numeroChamado']?></td>
         <td class="infoConsulta"><?php echo $index['numeroRal']?></td>
         <td class="infoConsulta"><?php echo $index['setor']?></td>
         <td class="infoConsulta"><?php echo $index['dtAbertura']?></td>
         <td class="infoConsulta"><?php echo $index['informacao']?></td>
         <td class="infoConsulta"><?php echo $index['update_at']?></td>
         <td>
          <button class="btn btn-primary"><a href="tratarChamado.php?id=<?php echo $index['numeroChamado']?>"><img id="imagemAdotar" src="../images/olhos.png"></a></button>  
         </td>
        </tr>

      <?php 
       }
      ?>
     
     </tbody>

    </table>

   </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>

 </body>

</html>