<?php
 namespace App\Models;

 class Produto {
   private $id, $nome, $descricao;
   function __construct($id, $nome, $descricao) {
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
   }
  public function getId() {
    return $this->id;
  }
  public function getNome() {
    return $this->nome;
  }
  public function getDescricao() {
    return $this->descricao;
  }

 }
 
?>