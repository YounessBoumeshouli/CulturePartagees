<?php

include_once("Membre.php");
class Author extends Membre{
    private $biography ;
    public function __construct($nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo) {        
        parent::__construct( $nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo);
    }
    public function addArticle($categorie_id, $title, $content, $auteur_id, $imageData = null) {
        $date = date("Y-m-d");
        
        $stmt = $this->pdo->prepare("
            INSERT INTO public.articles (
                title, content, categorie_id, auteur_id, creationdate, modificationdate, article_image
            ) VALUES (
                :title, :content, :categorie_id, :auteur_id, :creationdate, :modificationdate, :article_image
            ) RETURNING id_article
        ");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":categorie_id", $categorie_id);
        $stmt->bindParam(":auteur_id", $auteur_id);
        $stmt->bindParam(":creationdate", $date);
        $stmt->bindParam(":modificationdate", $date);
        
        // Handle binary image data
        if ($imageData !== null) {
            $stmt->bindParam(":article_image", $imageData, PDO::PARAM_LOB); // Use PDO::PARAM_LOB for binary data
        } else {
            $stmt->bindValue(":article_image", null, PDO::PARAM_NULL); // Bind NULL if no image is provided
        }
        
        // Execute the query
        $stmt->execute();
        
        // Fetch the inserted article ID
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function EditArticle($id,$title,$description,$content,$categorie_id){
        $modificationdate =date("Y-m-d");

        $stmt = $this->pdo->prepare("UPDATE  public.articles
	    
	SET title =  :title,description = :description ,content = :content, categorie_id = :categorie_id,
    modificationdate = :modificationdate where id_article = :id_article");
           $stmt->bindParam(":title",$title);
           $stmt->bindParam(":description",$description);
           $stmt->bindParam(":content",$content);
           $stmt->bindParam(":categorie_id",$categorie_id);
           $stmt->bindParam(":modificationdate",$modificationdate);
           $stmt->bindParam(":id_article",$id);
           $stmt->execute();

    }
    public function DeleteArticle($id){
        $stmt = $this->pdo->prepare("DELETE from  public.articles
	where id_article = :id_article");
           $stmt->bindParam(":id_article",$id);
           $stmt->execute();

    }
    public function SelectArticle($id){
        $stmt = $this->pdo->prepare("SELECT * FROM public.articles a left join articles_tags ar on ar.id_a =  a.id_article left join tags t on
t.id_tag = ar.id_t where ar.id_a = :id_a");
           $stmt->bindParam(":id_a",$id);
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           return $result;
    }
    public function SelectUsersByRole($role){
        $stmt = $this->pdo->prepare("SELECT * from  public.users
	where role = :role ");
           $stmt->bindParam(":role",$role);
           $stmt->execute();
           $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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