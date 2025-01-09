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
    public function insertIntoTagArticles($idTag,$idArticle){
      $stmt =  $this->pdo->prepare("INSERT INTO public.articles_tags(
	id_t, id_a)
	VALUES (:id_t , :id_a) ");
    $stmt->bindParam(":id_t",$idTag);
    $stmt->bindParam(":id_a",$idArticle);
        $stmt->execute();
    }
}