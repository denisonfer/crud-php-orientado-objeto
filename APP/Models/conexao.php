<?php
 namespace App\Models;

 class Conexao {
   private static $instance;

   public static function getCon() { //faz a conexão com o banco no modelo SINGELTON
     try {
        if(!isset(self::$instance)) {
          self::$instance = new \PDO("mysql:host=localhost;dbname=pdo;charset=utf8","root","");
        } 
        return self::$instance;
     } catch (\Throwable $th) {
       echo "erro ao conectar no banco <hr>" . $th;
     }
   }
 }
 