/*Função que registra a informação no banco de dados*/
$('#registrar').click(function(){
 var numeroInc  = document.getElementById('incidente').value;
 var numeroRal  = document.getElementById('ral').value;
 var nomeArea   = document.getElementById('area').value;
 var observacao = document.getElementById('observacao').value;

 if(numeroInc === '' || numeroRal === '' || nomeArea === '' || observacao === ''){
  
  document.querySelector('.mensagem').innerHTML= '<div class="alert alert-danger alert-dismissible">'  + 
                                                 'Os dados não foi inseridos, preencha os campos para continuar!</div>';  
 }else{
  /*Function via Ajax*/ 
  $.ajax({
   type: "POST",
   url:  "../controller/registrarInformacao.php",
   data:{
    passNumeroInc: numeroInc,
    passNumeroRal: numeroRal,
    passNomeArea: nomeArea,
    passObservacao: observacao  
   },
   success: function () {
    document.querySelector('.mensagem').innerHTML= '<div class="alert alert-success alert-dismissible">' + 
                                                   'Dados inseridos com sucesso!</div>';  
   }
  });
 }
});

$('#atualizar').click(function(){
 var editNumeroChamado = document.getElementById('editIncidente').value;
 var editArea          = document.getElementById('editArea').value;
 var editOberservacao  = document.getElementById('editObservacao').value

 if(editArea === 'Informe a área responsável'){
  document.querySelector('.mensagem').innerHTML= '<div class="alert alert-danger alert-dismissible">'  + 
                                                 'Para continuar é necessário escolher a área!</div>';  
 }else{
  /*Function via Ajax*/ 
  $.ajax({
   type: "POST",
   url:  "../controller/registrarInformacao.php",
   data:{
    passEditNumeroChamado: editNumeroChamado,
    passEditObservacao   : editOberservacao
   },
   success: function () {
    document.querySelector('.mensagem').innerHTML= '<div class="alert alert-success alert-dismissible">' + 
                                                    'Dados alterados com sucesso!</div>';  

    setTimeout(function() {
     window.location.reload(1);
    }, 1800); // 3 segundos
   }
  });
 }
});

