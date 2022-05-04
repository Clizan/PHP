<!DOCTYPE html><!--Método que incida a utilização do HTML 5 -->
<html lang="br"><!--Tag de inicialização do HTML -->
 <head>
  <title>Relatorio</title>
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

  <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['bar']});
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Dia', 'Chamados'],

     <?php
      #incluindo a classe conexao
      include_once '../model/conexao.php';
      
      #Consultando os dados que já existe na tabela
      $sql = mysqli_query($conexao, "SELECT date_format(dtAbertura, '%d') as dia, count(id) as chamado FROM integrado.chamado");

      foreach($sql as $dados){
       $dia          = $dados['dia'];
       $countChamado = $dados['chamado']; 
     ?>
          
      ['<?php echo $dia?>', <?php echo $countChamado?>],

     <?php 
      }  
     ?>
    ]);

    var options = {
                   width: 1200,
                   height: 550,
                   bar: { groupWidth: '30%' },
                   chart: {
                    title: 'Quantidade de chamados'
                   }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
   }
  </script>

 </body>

</html>