<?php
//IMPORTAÇÕES
 require_once '../includes/header.php';
 require_once '../vendor/autoload.php';
//NAMESPACES
 use App\Models\ProdutoDAO as ProdutoDAO;
 $id = $_GET['id'];
 $produtoDAO = new ProdutoDAO();
 $dados = $produtoDAO->readId($id);
?>

<main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <h3 class="light">Cadastro de Produto</h3>
            <form action="../App/controllers/update-controll.php" method="POST">
              <input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">
              <div class="input-field col s12 l6">
                <input type="text" id="nome" name="nome" class="validate" value="<?php echo $dados['nome']; ?>" required>
                <label for="nome">Nome</label>
              </div>
              <div class="input-field col s12 l6">
                <input type="text" id="descricao" name="descricao" class="validate" value="<?php echo $dados['descricao']; ?>" required>
                <label for="descricao">Descrição</label>
              </div>
              <div class="container-botoes">
              <button class="waves-effect waves-light btn green darken-1" type="submit" name="btn-atualizar">
                Atualizar
                <i class="material-icons right">check</i>
              </button>
                <a href="../index.php" class="btn waves-effect waves-light orange">
                  Lista de Produtos
                  <i class="material-icons right">home</i>
                </a>
              </div>
            </div>
            </form> 
        </div>
      </div>
    </main>

<?php
  require_once '../includes/footer.php';
?>
