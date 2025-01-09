<?php
require_once("Core/config/Database.php");

class Tags {
    private $idArticle ;
    private $idTag ;
    private $pdo;
    public function __construct($pdo){
        
        $this->pdo = Database::getConnection();

    }

    public function afficherLesTag(){
      return $this->pdo->query("select * from tags ");
        
    }
}