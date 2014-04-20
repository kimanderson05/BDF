<?php

include 'models/DB.php';
include 'models/ViewModel.php';
include 'models/PetsModel.php';

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

    if($user['admin']){
        if(!empty($_GET['userId'])){ //we want a detailed record
            $data = $model->getDetailed($_GET['userId']);
            $contentPage = 'details';
        }else if(!empty($_GET['regUser'])){
            $contentPage = 'reg';
        }else if(!empty($_GET['updateUser'])){
            $contentPage = 'update';
            $data = $model->getDetailed($_GET['updateUser']);
        }else if(!empty($_GET['updateAction'])){
            $data = $model->updateUser($_GET['updateAction'],$_POST['email'], $_POST['password']);
            $contentPage = 'details';
        }else if(!empty($_GET['addAction'])){
            $data = $model->addUser($_POST['email'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['userName']);
            $contentPage = 'body';
        }else if(!empty($_GET['deleteUser'])){
            $data = $model->deleteUser($_GET['deleteUser']);
            $contentPage = 'body';
        }else{
            $data = $model->getAll();
            $contentPage = 'body';
        }
    }else{
        if(!empty($_GET['userId'])){ //we want a detailed record
            $data = $model->getDetailed($_GET['userId']);
            $contentPage = 'details';
        }else{
            $data = $model->getAll();
            $contentPage = 'body';
        }
    }
}else{
    if (!empty($username) && !empty($password)){
        $user = $model->loginInfo($username, $password);
        if(is_array($user)){
            $_SESSION['userInfo'] = $user;
//            if(!empty($_GET['userId'])){
//                $data = $model->getDetailed($_GET['userId']);
//                $contentPage = 'details';
//            }else if(!empty($_GET['regUser'])){
//                $contentPage = 'reg';
//            }else if(!empty($_GET['updateUser'])){
//                $contentPage = 'update';
//            }else{
//                $data = $model->getAll();
//                $contentPage = 'body';
//            }
            $data = $model->getAll();
            $contentPage = 'body';
        }
    }
}
#this shows the header, body, and footer
$view->show('header');
$view->show($contentPage, $user, $data);
$view->show('footer');