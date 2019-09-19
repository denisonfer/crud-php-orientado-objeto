<?php
//MENSAGEM DE RETORNO AO CRIAR
  if (isset($_GET['retorno'])) {
    $msg = "";
    if ($_GET['retorno'] == "criar-sucesso" ||
       $_GET['retorno'] == "editar-sucesso" || 
       $_GET['retorno'] == "deletar-sucesso" ) {
      $msg = "Operação realizada com sucesso!";
?> 
<script>
  window.onload = function() {
    Materialize.toast("<?php echo $msg ?>", 2000, classes= "green");
  }
</script>
<?php      
    }
    if ($_GET['retorno'] == "criar-falha" || 
      $_GET['retorno'] == "editar-falha" || 
       $_GET['retorno'] == "deletar-falha") {
      $msg = "Erro na operação!";
?>
<script>
  window.onload = function() {
    Materialize.toast("<?php echo $msg ?>", 2000, classes= "red");
  }
</script>   
<?php  
    }
  } 
?> 