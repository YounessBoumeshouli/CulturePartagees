<?php
require_once 'C:/laragon/www/CulturePartagees/Core/config/Database.php';
class Articles {
    private $id;
    private $title;
    private $status;
    private $description;
    private $content;
    private $modificationDate;
    private $creationDate;
    private $id_auteur;
    private $pdo;
    
    public function __construct($pdo){
        $this->pdo = Database::getConnection();
    }
    public function afficherArticles(){
        $stmt = $this->pdo->query("select * from articles a inner join users u on a.auteur_id = u.id_user  where a.status = 'accepted' ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function afficherArticle($id){
        $stmt = $this->pdo->prepare("select * from public.articles a left join public.users u on a.auteur_id = u.id_user left join categories c on a.categorie_id = c.id_categorie where a.status = 'accepted' and a.id_article = :id ");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function afficherArticlesBystatus($status){
  
        $stmt = $this->pdo->prepare("SELECT * from public.articles WHERE status=:status");
        $stmt->bindParam(":status",$status);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
}