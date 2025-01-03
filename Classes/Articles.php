<?php
require("Core/config/Database.php");
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
    
    public function __construct($id,$title,$status,$description,$content,$modificationDate,$creationDate,$id_auteur,$pdo){
        $this->id = $id;
        $this->title = $title;
        $this->status = $status;
        $this->description = $description;
        $this->content = $content;
        $this->modificationDate = $modificationDate;
        $this->creationDate = $creationDate;
        $this->id_auteur = $id_auteur;
        $this->pdo = Database::getConnection();
    }
    public function afficherArticles(){
        $stmt = $this->pdo->query("select * from public.articles");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}