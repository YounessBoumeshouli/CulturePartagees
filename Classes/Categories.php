<?php
require_once("Core/config/Database.php");
class Categories {
   
    private $pdo;
    
    public function __construct($pdo){ 
        $this->pdo = Database::getConnection();
    }
    public function afficherCategories(){
        $stmt = $this->pdo->query("select * from public.categories");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function countArticlesGroupByCategory(){
        $stmt = $this->pdo->query("select count(*) from public.articles group by catégorie_id");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}