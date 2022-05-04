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

  <div class="container-fluid">

   <div class="chamado">

    <div id="cadastrarChamados" class="container">
  
     <div class="row">
  
      <div class="col-1">
    
       <label class="tituloChamado">Incidente</label>
   
      </div>

     <div class="col-12">
    
      <input type="text" id="incidente">
   
     </div>

     <div class="col-1">
    
      <label class="tituloChamado">RAL</label>
   
     </div>

     <div class="col-12">
    
      <input type="text" id="ral">
   
     </div>

     <div class="col-1">
    
      <label class="tituloChamado"> Area</label>
  
     </div>

     <div class="col-12">
     
      <select class="form-select form-select-sm" id="area" aria-label=".form-select-sm example">
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
    
      <textarea class="form-control" id="observacao" rows="5"></textarea>
    
     </div>
  
    </div>

    <button id="registrar" class="btn btn-success">Registrar</button>

    <div class="mensagem"></div>
   
   </div>  

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="../js/script.js"></script>
 
  </div>
 
 </body>

</html> 