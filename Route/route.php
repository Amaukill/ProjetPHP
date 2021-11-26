<?php

$app = new App();
$app->route("", "Controller", "Home");
$app->route("Home", "Controller", "Home");
$app->route("ListArticle", "ArticleController", "listArticle");
$app->route("DeleteArticle", "ArticleController", "DeleteArticle");
$app->route("CreateArticleView", "ArticleController", "CreateArticleView");
$app->route("CreateArticle", "ArticleController", "ModifyArticle");

?>