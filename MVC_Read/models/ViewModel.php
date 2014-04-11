<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:02 PM
 */

class ViewModel{

    public function __construct(){

    }

    public function showHeader(){
        include 'views/header.inc';
    }

    public function showList($value){
        include 'views/body.php';
    }

    public function showDetailed($value){
        $row=$value[0];
        include 'views/details.php';
    }

    public function showFooter(){
        include 'views/footer.inc';
    }

}