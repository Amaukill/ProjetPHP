<?php
include "Controller.php";
class ArticleController extends Controller {
    function index(){
        $this->View("ShowUser");
        /*
        include_once "View/header.php";
        include_once "View/ShowUser.php";
        (autre façon de faire pour les includes)
        */
    }
    function listArticle(){
        $art = new Article();
        $a= $art->All();
        $this->View("ArticleView",$a);

    }
    function FindArticle(){
        $art = new Article();
        $id = $_GET['id'];
        $a= $art->FindId($id);
        $this->View("ShowArticle",$a);
    }
    function ModifyArticle(){
        $art = new Article();
        $id = $_GET['id'];
        $article = $art->FindId($id);
        Article::Save($article);
        $this->FindArticle($id);
    }
    function DeleteArticle(){
        $art = new Article();
        $id = $_GET['id'];
        $art->Delete($id);
        $this->listArticle();
    }
}
?>