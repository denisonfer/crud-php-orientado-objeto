 <?php
 //IMPORTAÇÕES
 require_once '../../vendor/autoload.php';
  
 //NAMESPACES
 use App\Models\Produto as Produto;
 use App\Models\ProdutoDAO as ProdutoDAO;

 $id = $_POST['id'];
 $nome = $_POST['nome'];
 $descricao = $_POST['descricao'];

  if(isset($_POST['btn-atualizar'])) {
    try {
      $produto = new Produto($id, $nome, $descricao);
      $produtoDAO = new ProdutoDAO();
      $produtoDAO->update($produto);
      header('location: ../../index.php?retorno=editar-sucesso');
    } catch (\Throwable $th) {
      header('location: ../../index.php?retorno=editar-falha');
    }
  }
