<?php 
 #colocando como default o horário de São Paulo
 date_default_timezone_set('America/Sao_Paulo');

 #incluindo a classe conexao
 include_once '../model/conexao.php';

 #variavel data de insercao
 $insert_at = date('Y-m-d H:i:s');

 #Função que insere o chamado na tabela de chamado
 function insereChamado($conexao, $rcNumeroInc, $rcNumeroRal, $rcNomeArea, $rcObservacao, $insert_at){
 #inserindo os valores no banco de dados
 $insert = mysqli_query($conexao, "INSERT INTO integrado.chamado (numeroChamado, numeroRal, setor, dtAbertura, informacao) 
                                    VALUES ('$rcNumeroInc', '$rcNumeroRal', '$rcNomeArea', '$insert_at', '$rcObservacao')");

 }

 #Função responsável por fazer o armazenamento na tabela historico
 function editChamado($conexao, $rEditNumeroChamado, $rEditObservacao, $insert_at){
  #Inserindo os dados na tabela
  $insert = mysqli_query($conexao, "INSERT INTO integrado.historico (numeroChamado, dataRegistro, historico) VALUES ('$rEditNumeroChamado', '$insert_at', '$rEditObservacao')");   

 }

 #if que verifica se o 'passNumeroInc'
 if(isset($_POST['passNumeroInc'])){
  #Variavel que foi passada por Ajax
  $rcNumeroInc  = $_POST['passNumeroInc'];
  $rcNumeroRal  = $_POST['passNumeroRal'];
  $rcNomeArea   = $_POST['passNomeArea'];
  $rcObservacao = $_POST['passObservacao'];
  
  insereChamado($conexao, $rcNumeroInc, $rcNumeroRal, $rcNomeArea, $rcObservacao, $insert_at);   
 }

 #if que verifica se o 'editNumeroChamado' 
 if(isset($_POST['passEditNumeroChamado'])){
  #Variavel que foi passada por Ajax
  $rEditNumeroChamado = $_POST['passEditNumeroChamado'];
  $rEditObservacao    = $_POST['passEditObservacao'];
    
  editChamado($conexao, $rEditNumeroChamado, $rEditObservacao, $insert_at);
 }



?>