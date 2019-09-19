<?php
 namespace App\Models;

 class ProdutoDAO {

   public function create(Produto $produto) {
    $sql = "INSERT INTO produto (id, nome, descricao) VALUES (null, ?, ?)";
    try {
      //PDO
      $stmt = Conexao::getCon()->prepare($sql);
      $stmt->bindValue(1, $produto->getNome());
      $stmt->bindValue(2, $produto->getDescricao());
      $stmt->execute();
    } catch (\Throwable $th) {
      echo "Erro ao inserir produto, Fale com o Admin";
    }
    
   }
   public function readId($id) {
    $sql = "SELECT * FROM produto WHERE id=?";
    try {
      //PDO
      $stmt = Conexao::getCon()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
      $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
      return $resultado;
    } catch (\Throwable $th) {
      echo "Erro ao buscar o produto, Fale com o Admin";
    }
   }
   public function read() {
    $sql = "SELECT * FROM produto ORDER BY id";
    try {
      //PDO
      $stmt = Conexao::getCon()->prepare($sql);
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
      }
    } catch (\Throwable $th) {
      echo "Erro ao buscar os produtos, Fale com o Admin";
    }
   }
   public function update(Produto $produto) {
      $sql = "UPDATE produto SET nome=?, descricao=? WHERE id=?";
      try {
        //PDO
        $stmt = Conexao::getCon()->prepare($sql);
        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getDescricao());
        $stmt->bindValue(3, $produto->getId());
        $stmt->execute();
      } catch (\Throwable $th) {
        echo "Erro ao atualizar produto, Fale com o Admin";
      }
   }
   public function delete($id) {
    $sql = "DELETE FROM produto WHERE id=?";
    try {
      //PDO
      $stmt = Conexao::getCon()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
    } catch (\Throwable $th) {
      echo "Erro ao deletar produto, Fale com o Admin";
    }
   }

 }
 