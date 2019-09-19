<?php
//IMPORTAÇÕES
 require_once '../includes/header.php';
?>

<main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <h3 class="light">Cadastro de Produto</h3>
            <form action="../App/controllers/create-controll.php" method="POST">
              <div class="input-field col s12 l6">
                <input type="text" id="nome" name="nome" class="validate" required>
                <label for="nome">Nome</label>
              </div>
              <div class="input-field col s12 l6">
                <input type="text" id="descricao" name="descricao" class="validate" required>
                <label for="descricao">Descrição</label>
              </div>
              <div class="container-botoes">
              <button class="waves-effect waves-light btn green darken-1" type="submit" name="btn-cadastrar">
                Adicionar
                <i class="material-icons right">add</i>
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
