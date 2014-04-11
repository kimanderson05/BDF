<?php

include 'models/DB.php';
include 'models/ViewModel.php';
include 'models/PetsModel.php';

    $dsn = DBASE;
    $db_user = UNAME;
    $db_pass = PWORD;

    $db = new \PDO($dsn, $db_user, $db_pass);
//    var_dump($db);

    $view = new ViewModel();
    $pets = new PetsModel($db);

    $view->showHeader();

if(!empty($_GET["userId"])){
    $view->showDetailed($pets->getDetailed($_GET["userId"]));
}else{
    $view->showList($pets->getAll());
}


    $view->showFooter();
