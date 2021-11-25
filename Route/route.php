<?php

$app = new App();
$app->route("","Controller","Home");
$app->route("Home","Controller","Home");
$app->route("ListArticle","ArticleController","listArticle");
$app->route("AddUser","UserController","Save");
$app->route("AddArticle","ArticleController","Save");
$app->route("ModifyArticle/:id","ArticleController","Save");
$app->route("ModifyUser/:id","UserController","Save");
$app->route("DeleteArticle","ArticleController","Delete");
$app->route("DeleteUser","UserController","Delete");

?>