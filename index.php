<?php
//IMPORTAÇÕES
 require_once 'vendor/autoload.php';
 require_once 'includes/header.php';
//NAMESPACES
 use App\Models\ProdutoDAO as ProdutoDAO;
 
 $produtoDAO = new ProdutoDAO();
?>

    <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <table class="highlight">
              <h3 class="light">Lista de Produtos</h3>
              <thead>
                <tr>
                  <th data-field="id">Código</th>
                  <th data-field="nome">Nome do Produto</th>
                  <th data-field="descricao">Descrição do Produto</th>
                  <th data-field="acoes">Editar</th>
                  <th data-field="acoes">Deletar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $produtoDAO->read();
                  foreach ($produtoDAO->read() as $produto) {
                ?>
                <tr>
                  <td><?php echo $produto['id']; ?></td>
                  <td><?php echo $produto['nome']; ?></td>
                  <td><?php echo $produto['descricao']; ?></td>
                  <td><a href="./Pages/editar.php?id=<?php echo $produto['id']; ?>"
                       class="waves-effect waves-orange btn-floating edit">
                      <i class="material-icons right">edit</i>
                    </a>
                  </td>
                  <td><a href="#modal<?php echo $produto['id']; ?>" 
                      class="waves-effect waves-red btn-floating delete modal-trigger">
                      <i class="material-icons right">delete</i>
                    </a>
                  </td>
          <!-- Modal Structure -->
                  <div id="modal<?php echo $produto['id']; ?>" class="modal bottom-sheet">
                    <div class="modal-content">
                      <h3>Opa!</h3>
                      <h4>Deseja realmente excluir este produto?</h4>
                    </div>
                    <div class="modal-footer">
                      <form action="./App/controllers/delete-controll.php" method="POST">
                        <input type="hidden" name="id" name="id" value="<?php echo $produto['id']; ?>">
                        <button type="submit" name="btn-deletar"class="modal-action modal-close waves-effect waves-light btn green">Sim! Excluir</button>
                        <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red">Não! Cancelar</a>
                      </form>
                    </div>
                  </div>
                </tr>
              </tbody>
              <?php }; ?>
            </table>
            <div class="container-botoes">
                <a href="./Pages/criar.php" class="btn waves-effect waves-light green darken-1">
                  Adicionar Produto
                  <i class="material-icons right">add</i>
                </a>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php
  require_once 'includes/footer.php';
?>
