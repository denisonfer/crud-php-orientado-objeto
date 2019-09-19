<?php
 //IMPORTAÇÕES
 require_once '../../vendor/autoload.php';
  
 //NAMESPACES
 use App\Models\ProdutoDAO as ProdutoDAO;

 $id = $_POST['id'];

  if(isset($_POST['btn-deletar'])) {
    try {
      $produtoDAO = new ProdutoDAO();
      $produtoDAO->delete($id);
      header('location: ../../index.php?retorno=deletar-sucesso');
    } catch (\Throwable $th) {
      header('location: ../../index.php?retorno=deletar-falha');
    }
  }
