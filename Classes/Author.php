<?php

include("Membre.php");
class Author extends Membre{
    private $biography ;
    public function __construct($nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo) {        
        parent::__construct( $nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo);
    }
    public function addArticle(){
        $stmt = $this->pdo->prepare("INSERT INTO public.articles(
	 title, status, description, content, catégorie_id, auteur_id, creationdate, modificationdate)
	VALUES ( :title, :status,:description ,:content, :catégorie_id, :auteur_id, :creationdate,:modificationdate)");
           $stmt->bindParam(":title",$title);
           $stmt->bindParam(":status",$status);
           $stmt->bindParam(":description",$description);
           $stmt->bindParam(":content",$content);
           $stmt->bindParam(":catégorie_id",$catégorie_id);
           $stmt->bindParam(":auteur_id",$auteur_id);
           $stmt->bindParam(":creationdate",$creationdate);
           $stmt->bindParam(":modificationdate",$modificationdate);
           $stmt->execute();
    }
    public function EditArticle(){
        $stmt = $this->pdo->prepare("UPDATE  public.articles
	     
	SET title :title,status :status,description:description ,content:content, catégorie_id:catégorie_id,
     auteur_id:auteur_id,creationdate :creationdate,:modificationdate where id = :id");
           $stmt->bindParam(":title",$title);
           $stmt->bindParam(":status",$status);
           $stmt->bindParam(":description",$description);
           $stmt->bindParam(":content",$content);
           $stmt->bindParam(":catégorie_id",$catégorie_id);
           $stmt->bindParam(":auteur_id",$auteur_id);
           $stmt->bindParam(":creationdate",$creationdate);
           $stmt->bindParam(":modificationdate",$modificationdate);
           $stmt->bindParam(":id",$id);
           $stmt->execute();

    }
    public function DeleteArticle(){
        $stmt = $this->pdo->prepare("DELETE from  public.articles
	where id = :id");
           $stmt->bindParam(":id",$id);
           $stmt->execute();

    }
}