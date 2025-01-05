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
    case 'login':
        login();
        break;
    case 'SignUp':
        SignUp();
        break;
    case 'registrationForm':
        registrationAction();
        break;
    case 'home':
        homePage();
        break;
    case 'selectArticle':
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
    case 'editeArticle':
        editeArticle();
        break;
    case 'editArticleAction':
        editArticleAction();
        break;
    case 'deleteArticle':
        deleteArticle();
        break;
    case 'acceptArticle':
        acceptArticle();
        break;
    case 'reffuseArticle':
        reffuseArticle();
        break;
    case 'articles':
        articles();
        break;
    case 'ArticlesList':
        articleList();
        break;
    case 'categoriesList':
        categoriesList();
        break;
    case 'addCategorie':
        addCategorie();
        break;
    case 'authorsList':
        authorsList();
        break;
    case 'memebersList':
        memebersList();
        break;
    case 'ajouterArticle':
        ajouterArticleAction();
        break;
    case 'myArticles':
        myArticles();
        break;
    case 'addComment':
        addComment();
        break;
    case 'changestatus':
        changestatus();
        break;
   
    default:
    echo "page not found";
    break;
}
?>
