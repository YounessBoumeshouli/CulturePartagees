<?php

include_once("Membre.php");
class Author extends Membre{
    private $biography ;
    public function __construct($nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo) {        
        parent::__construct( $nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo);
    }
    public function addArticle($categorie_id,$title,$content,$auteur_id){
        $date =date("Y-m-d");
        $stmt = $this->pdo->prepare("INSERT INTO public.articles(
	 title, content, categorie_id, auteur_id, creationdate, modificationdate)
	VALUES ( :title ,:content, :categorie_id, :auteur_id, :creationdate,:modificationdate)");
           $stmt->bindParam(":title",$title);
           $stmt->bindParam(":content",$content);
           $stmt->bindParam(":categorie_id",$categorie_id);
           $stmt->bindParam(":auteur_id",$auteur_id);
           $stmt->bindParam(":creationdate",$date);
           $stmt->bindParam(":modificationdate",$date);
           $stmt->execute();
    }
    public function EditArticle($id,$title,$description,$content,$categorie_id){
        $modificationdate =date("Y-m-d");

        $stmt = $this->pdo->prepare("UPDATE  public.articles
	    
	SET title =  :title,description = :description ,content = :content, categorie_id = :categorie_id,
    modificationdate = :modificationdate where id = :id");
           $stmt->bindParam(":title",$title);
           $stmt->bindParam(":description",$description);
           $stmt->bindParam(":content",$content);
           $stmt->bindParam(":categorie_id",$categorie_id);
           $stmt->bindParam(":modificationdate",$modificationdate);
           $stmt->bindParam(":id",$id);
           $stmt->execute();

    }
    public function DeleteArticle($id){
        $stmt = $this->pdo->prepare("DELETE from  public.articles
	where id = :id");
           $stmt->bindParam(":id",$id);
           $stmt->execute();

    }
    public function SelectArticle($id){
        $stmt = $this->pdo->prepare("SELECT * from  public.articles
	where id = :id");
           $stmt->bindParam(":id",$id);
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           var_dump($result);
           return $result;
    }
    public function SelectArticlebyAuthor($id){
        $stmt = $this->pdo->prepare("SELECT * from  public.articles
	where auteur_id = :auteur_id");
           $stmt->bindParam(":auteur_id",$id);
           $stmt->execute();
           $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
           return $result;

    }
}