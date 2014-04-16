<?php

require_once "../models/DB.php";
require_once "AuthModel.php";
require_once "AuthView.php";

$model = new AuthModel(DBASE, UNAME, PWORD);
$view = new AuthView();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

$contentPage = 'form';

if (!empty($username) && !empty($password)){
    $user = $model->getUserByNamePass($username, $password);
    if(is_array($user)){
        $contentPage = 'success';
    }
}

$view-->show('../views/header.inc');
$view-->show($contentPage, $user);
$view-->show('../views/footer.inc');