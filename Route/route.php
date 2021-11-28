<?php

$app = new App();
$app->route("", "Controller", "Home");
$app->route("Home", "Controller", "Home");
$app->route("ListArticle", "ArticleController", "listArticle");
$app->route("DeleteArticle", "ArticleController", "DeleteArticle");
$app->route("CreateArticleView", "ArticleController", "ModifyArticleView");
$app->route("ModifyArticleView", "ArticleController", "ModifyArticleView");
$app->route("ModifyArticle", "ArticleController", "ModifyArticle");
$app->route("ShowArticle", "ArticleController", "FindArticle");
$app->route("FindArticleByCategorie", "ArticleController", "FindArticleByCategorie");
$app->route("ModifyCategorie", "CategorieController", "ModifyCategorie");
$app->route("ListCategorie", "CategorieController", "listCategorie");
$app->route("DeleteCategorie", "CategorieController", "DeleteCategorie");
$app->route("CreateCategorieView", "CategorieController", "ModifyCategorieView");
$app->route("ModifyCategorieView", "CategorieController", "ModifyCategorieView");
?>