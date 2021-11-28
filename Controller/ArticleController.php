<?php
include "Controller.php";

class ArticleController extends Controller
{
    function index()
    {
        $this->View("ShowUser");
        /*
        include_once "View/header.php";
        include_once "View/ShowUser.php";
        (autre façon de faire pour les includes)
        */
    }

    function listArticle()
    {
        $article = new Article();
        $a = $article->All();
        $this->View("ArticleView", $a);

    }

    function FindArticle()
    {
        $art = new Article();
        $id = $_GET['id'];
        $a = $art->FindId($id);
        $this->View("ShowArticle", $a);
    }

    function FindArticleByCategorie()
    {
        $art = new Article();
        $id = $_GET['id'];
        $a = $art->FindByCategorie($id);
        $this->View("ArticleView", $a);
    }

    function ModifyArticle()
    {

        $art = new Article();
        if (isset($_GET['id'])) {
            $art->setId($_GET['id']);
        }
        $art->save();
        header('location:?route=ListArticle');
        $this->listArticle();
    }

    function DeleteArticle()
    {
        $art = new Article();
        $id = $_GET['id'];
        $art->Delete($id);
        header('location:?route=ListArticle');
        $this->listArticle();
    }

    function ModifyArticleView($id = null)
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        if ($id != null) {
            $art = new Article();
            $a = $art->FindId($id);
            $this->View("CreateArticle", $a);
        } else {
            $this->View("CreateArticle");
        }
    }

}

?>