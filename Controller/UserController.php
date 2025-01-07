<?php

include("Classes/Admin.php");
include("Classes/Categories.php");
include("Classes/Author.php");
include("Classes/Articles.php");
include("Classes/Avis.php");
session_start();
function inscriptionAction(){
    require_once("Views/Authentification/login.php");
}
function registrationAction(){
    require_once("Views/Authentification/register.php");
}
function HomeViwe(){
    require_once("Views/Membre/home.php");
}
// function ArticleView() {
//     $id = $_GET["id"];
//     $article = new Articles(Database::getConnection());
//     $avis = new Avis(Database::getConnection());
//     $result = $article->afficherArticle($id);
//     $Avis = $avis->afficherAvis($id);

//     if (isset($_GET['format']) && $_GET['format'] === 'json') {
//         header('Content-Type: application/json');
//         echo json_encode(['article' => $result, 'avis' => $Avis]);
//         return; // Stop script after sending JSON
//     }

//     require_once("Views/Membre/article.php");
// }
function ArticleView() {
    $id = $_GET["id"];
    $article = new Articles(Database::getConnection());
    $avis = new Avis(Database::getConnection());

    $result = $article->afficherArticle($id);
    $Avis = $avis->afficherAvis($id);

    // Sanitize data
    $result = cleanData($result);
    $Avis = array_map('cleanData', $Avis);

    var_dump($result, $Avis);
    
    // Check if it's an AJAX request
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        // Prepare JSON response
        header('Content-Type: application/json'); // Ensure this is at the top before output
        $response = json_encode(['article' => $result, 'avis' => $Avis]);
        
        if ($response === false) {
            echo json_encode(['error' => json_last_error_msg()]);
            return;
        }
        echo $response;
        
        // Stop further execution
    }
    require_once("Views/Membre/article.php");

}


// Helper function to sanitize data
function cleanData($data) {
    if (is_array($data)) {
        return array_map('cleanData', $data);
    } elseif (is_object($data)) {
        return array_map('cleanData', get_object_vars($data));
    } elseif (is_resource($data)) {
        return null; // Remove resources
    }
    return $data;
}



function ArticleJsonView() {
    $id = $_GET["id"];
    $article = new Articles(Database::getConnection());
    $avis = new Avis(Database::getConnection());

    $result = $article->afficherArticle($id);
    $Avis = $avis->afficherAvis($id);

    header('Content-Type: application/json');
    echo json_encode(['article' => $result, 'avis' => $Avis]);
}
function ProfileView(){
    $id = $_SESSION["user"]["id_user"];
    $user = new User(null, null, null, null, null, null, null,null);
    $result = $user->viewProfile($id);
    $dir  = $_SESSION['user']['role'];
    $dir[0] = strtoupper($dir[0]);
    require_once("Views/$dir/profile.php");
}
function SettingsView(){
    $id = $_SESSION["user"]["id_user"];
    $user = new User(null, null, null, null, null, null, null,null);
    $result = $user->viewProfile($id);
    $dir  = $_SESSION['user']['role'];
    $dir[0] = strtoupper($dir[0]);
    require_once("Views/$dir/settings.php");
}

function likedArticles(){
    require_once("Views/Membre/likedArticles.php");
}
function addArticle(){

    $categorie = new Categories(Database::getConnection());
    $categories= $categorie->afficherCategories();
    require_once("Views/Author/addArticle.php");
}
function ajouterArticleAction(){
    echo "hola";
if(isset($_POST["content"],$_POST["title"],$_POST["categorie"])){
   $content =  $_POST["content"];
   $title =  $_POST["title"];
   $categorie =  $_POST["categorie"];
    $Author = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
    $Author->addArticle($categorie,$title,$content,$_SESSION["user"]["id_user"]);
}
}
function editeArticle(){
    $categorie = new Categories(Database::getConnection());
    $categories= $categorie->afficherCategories();
    $id =  $_GET["idArticle"];
    $Author = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
    $article = $Author->SelectArticle($id);
    require_once("Views/Author/editeArticle.php");
}
function editeProfile(){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $mimeType = mime_content_type($_FILES['image']['tmp_name']);
    echo $nom,$prenom,$email,$phone;
    $id = $_SESSION["user"]["id_user"];
        $user = new User($nom, $prenom, $email, $password, $phone, null, null,Database::getConnection());
     $user->UpdateProfile($id,$imageData);
    
}
function editArticleAction(){
    $id =  $_GET["idArticle"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $content = $_POST["content"];
        $categorie_id = $_POST["categorie"];
        $Author = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
    $article = $Author->EditArticle($id,$title,$description,$content,$categorie_id);
    
}
function myArticles(){
    $Author = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
    $articles = $Author->SelectArticlebyAuthor($_SESSION["user"]["id_user"]);
    require_once("Views/Author/articles.php");
}
function articles(){
    require_once("Views/Author/articles.php");
}
function articleList(){
    $articles = new Articles(Database::getConnection());
    $status = 'checked';
    $result =  $articles->afficherArticlesBystatus($status);
    require_once("Views/Admin/articlesList.php");
}
function categoriesList(){
    $categorie = new Categories(Database::getConnection());
    $result= $categorie->afficherCategories();
    require_once("Views/Admin/categoriesList.php");
}
function authorsList(){
    $role = "Author";
    $Author = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
    $result = $Author->SelectUsersByRole($role);
    require_once("Views/Admin/AuthorsList.php");
}

function memebersList(){
    $role = "Membre";
    $Membre = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
    $result = $Membre->SelectUsersByRole($role);
    require_once("Views/Admin/MemebersList.php");
}
function login(){
    if(isset($_POST["email"],$_POST["password"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
       $user = new User(null,null,$email,$password,null,null,null,Database::getConnection());
      

      $result =  $user->seConnecter();
      $_SESSION['user'] = $result;
      $dir  = $_SESSION['user']['role'];
      $dir[0] = strtoupper($dir[0]);
        require_once("Views/$dir/settings.php");
    
    }
}
function homePage(){
       
        $articles = new Articles(Database::getConnection());
        $result =  $articles->afficherArticles("accepted");
      $dir  = $_SESSION['user']['role'];
      $dir[0] = strtoupper($dir[0]);
        require_once("Views/$dir/home.php");
    
    
}
function SignUp(){
    if(isset($_POST["name"])){
        $email = $_POST["email"];
        $role = $_POST["role"];
        $nom = $_POST["name"];
        $prenom = $_POST["prenom"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $registrationDate = date("Y-m-d");
       $user = new $role($nom,$prenom,$email,$password,$phone,$role,$registrationDate,Database::getConnection());
       $user->Inscription();
    }
}
function addCategorie(){
    if(isset($_POST["categorie"])){
        $categorie = $_POST["categorie"];
       $admin = new Admin($_SESSION['user']['nom'],$_SESSION['user']['prénom'],$_SESSION['user']['email'],$_SESSION['user']['password'],$_SESSION['user']["phone"],null,$_SESSION['user']["registrationdate"],null);
       $admin->creeCategorie($categorie);
    }
}
function deleteArticle(){
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $Author = new Author($_SESSION["user"]["nom"], $_SESSION["user"]["prénom"], $_SESSION["user"]["email"], $_SESSION["user"]["password"], $_SESSION["user"]["phone"], $_SESSION["user"]["role"], $_SESSION["user"]["registrationdate"],Database::getConnection()) ;
        $Author-> DeleteArticle($id);
    }
}
function acceptArticle(){
    if(isset($_GET["idArticle"])){
        $id = $_GET["idArticle"];
        $admin = new Admin($_SESSION['user']['nom'],$_SESSION['user']['prénom'],$_SESSION['user']['email'],$_SESSION['user']['password'],$_SESSION['user']["phone"],null,$_SESSION['user']["registrationdate"],null);
        $admin-> AcceptArticlebyID($id,"accepted");
    }
}
function reffuseArticle(){
    if(isset($_GET["idArticle"])){
        $id = $_GET["idArticle"];
        $admin = new Admin($_SESSION['user']['nom'],$_SESSION['user']['prénom'],$_SESSION['user']['email'],$_SESSION['user']['password'],$_SESSION['user']["phone"],null,$_SESSION['user']["registrationdate"],null);
        $admin-> ReffuseArticlebyID($id,"refused");
    }
}
function addComment(){
    $membre  = new Membre( $_SESSION['user']['nom'],$_SESSION['user']['prénom'],$_SESSION['user']['email'],$_SESSION['user']['password'],$_SESSION['user']["phone"],null,$_SESSION['user']["registrationdate"],null);
    $comment = $_POST["comment"];
    $reaction = $_POST["reaction"];
    $id_article = $_GET["id_article"];
    $id = $_SESSION['user']['id_user'];
    $membre->addComment($id , $comment , $id_article,$reaction);
}


function changestatus(){   
    $id = $_GET["id_membre"]; 
    $admin = new Admin($_SESSION['user']['nom'],$_SESSION['user']['prénom'],$_SESSION['user']['email'],$_SESSION['user']['password'],$_SESSION['user']["phone"],null,$_SESSION['user']["registrationdate"],null);
    $admin->ChangeStatus($id);
}