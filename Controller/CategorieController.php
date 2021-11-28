<?php

class CategorieController extends Controller
{

    function listCategorie()
    {
        $Categorie = new Categorie();
        $c = $Categorie->All();
        $this->View("CategorieView", $c);

    }


    function ModifyCategorie()
    {
        $cat = new Categorie();
        if (isset($_GET['id'])) {
            $cat->setId($_GET['id']);
        }
        $cat->Save();
        header('location:?route=ListCategorie');
        $this->listCategorie();
    }

    function DeleteCategorie()
    {
        $cat = new Categorie();
        $id = $_GET['id'];
        $cat->Delete($id);
        header('location:?route=ListCategorie');
        $this->listCategorie();
    }

    function ModifyCategorieView($id = null)
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        if ($id != null) {
            $cat = new Categorie();
            $c = $cat->FindId($id);
            $this->View("CreateCategorie", $c);
        } else {
            $this->View("CreateCategorie");
        }
    }

}