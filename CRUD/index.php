<?php

include 'models/DB.php';
include 'models/ViewModel.php';
include 'models/PetsModel.php';
//
//    $dsn = DBASE;
//    $db_user = UNAME;
//    $db_pass = PWORD;
//
//    $db = new \PDO($dsn, $db_user, $db_pass);
//    var_dump($db);
//
//    $view = new ViewModel();
//    $pets = new PetsModel($db);
//
//    $view->showHeader();
//
//if(!empty($_GET["userId"])){
//    $view->showDetailed($pets->getDetailed($_GET["userId"]));
//}else{
//    $view->showList($pets->getAll());
//}
//
//
//    $view->showFooter();

//$db = new \PDO($dsn, $db_user, $db_pass);

$model = new PetsModel(DBASE, UNAME, PWORD);
$view = new ViewModel();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

session_start();
$contentPage = 'form';
$user = '';
$data = '';

if(!empty($_SESSION['userInfo'])){
    $user = $_SESSION['userInfo'];
    $data = $model->getAll();
    $contentPage = 'body';
}else{
    if (!empty($username) && !empty($password)){
        $user = $model->loginInfo($username, $password);
        if(is_array($user)){
            $_SESSION['userInfo'] = $user;
            $contentPage = 'body';
            $data = $model->getAll();
        }
    }
}
#this shows the header, body, and footer
$view->show('header');
$view->show($contentPage, $user, $data);
$view->show('footer');