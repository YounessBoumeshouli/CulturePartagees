<?php

require_once "Controller/UserController.php";

if(isset($_GET["action"])){
    $action = $_GET["action"];
} else {
    $action = "home";
}

switch ($action) {
  
    case 'inscriptionForm':
        inscriptionAction();
        break;
    case 'home':
        HomeViwe();
        break;
    case 'article':
        ArticleView();
        break;
    case 'profile':
        ProfileView();
        break;
    case 'settings':
        SettingsView();
        break;
    case 'authorsettings':
        AuthorSettingsView();
        break;
    case 'likedArticles':
        likedArticles();
        break;
    case 'addArticle':
        addArticle();
        break;
    case 'editArticle':
        editArticle();
        break;
    case 'articles':
        articles();
        break;
    case 'articleList':
        articleList();
        break;
    case 'categoriesList':
        categoriesList();
        break;
   
    default:
    inscriptionAction();     
    break;
}
?>
