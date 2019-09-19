<?php
 //IMPORTAÇÕES
 require_once '../../vendor/autoload.php';
  
 //NAMESPACES
 use App\Models\Produto as Produto;
 use App\Models\ProdutoDAO as ProdutoDAO;

 $nome = $_POST['nome'];
 $descricao = $_POST['descricao'];

 if(isset($_POST['btn-cadastrar'])) {
  try {
    $produto = new Produto(null, $nome, $descricao);
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->create($produto);
    header('location: ../../index.php');
  } catch (\Throwable $th) {
    echo "Erro ao cadastrar produto";
  }
 }
