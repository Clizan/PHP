<?php  
 #incluindo a classe conexao
 include_once '../model/conexao.php';

 #pegando por get o que está sendo passado na URL
 $id = $_GET['id']; 

 $select =  mysqli_query($conexao, "SELECT * FROM integrado.chamado WHERE id = '$id'");

 $rSelect = mysqli_fetch_array($select);
?>

<!DOCTYPE html><!--Método que incida a utilização do HTML 5 -->
<html lang="br"><!--Tag de inicialização do HTML -->
 <head>
  <title>Tratamento Chamado</title>
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

  <div id="tratamento" class="container" >

   <div class="row">
    
    <div class="col-6">
     
     <div class="col-1">
    
      <label class="tituloChamado">Incidente</label>
   
     </div>

     <div class="col-12">
     
      <input type="text" id="editIncidente" value="<?php echo $rSelect['numeroChamado']?>">
   
     </div>

     <div class="col-1">
    
      <label class="tituloChamado">RAL</label>
 
     </div>

     <div class="col-12">
   
      <input type="text" id="editRal" value="<?php echo $rSelect['numeroRal']?>">
 
     </div>

     <div class="col-1">
   
      <label class="tituloChamado"> Area</label>
  
     </div>

     <div class="col-12">
   
      <select class="form-select form-select-sm" id="editArea" aria-label=".form-select-sm example">
       <option selected>Informe a área responsável</option>
       <option value="Fibra">Fibra</option>
       <option value="GMUD">GMUD</option>
       <option value="Movel">Movel</option>
      </select>
    
     </div>

     <div class="col-1">
    
      <label class="tituloChamado"> Observacao</label>
    
     </div>

     <div class="form-group">
   
      <textarea class="form-control" id="editObservacao" rows="5"></textarea>
   
     </div>

     <button id="atualizar" class="btn btn-success">Atualizar</button>
   
    </div>
    
    <div id="registroChamado" class="col-6">
     
     <?php 
      #consultando a tabela para averiguar se há informação de registro para este chamado
      $historicoChamado = mysqli_query($conexao, "SELECT * FROM integrado.historico WHERE numeroChamado = '$id' ORDER BY id DESC");

      if($historicoChamado !== FALSE){
       foreach($historicoChamado as $dados){
        echo 'Número Chamado: ' .$dados['numeroChamado']. '<br />';
        echo 'Data Registro: ' . $dados['dataRegistro'] . '<br />';
        echo 'Informação de Registro: ' .$dados['historico']. '<br />';
        echo '<p></p>';
       }   
      }else{
        echo 'Não há registros anteriores.';  
      }
     ?>
      
    </div>   

   </div>

   <div class="mensagem"></div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>

</body>

</html>