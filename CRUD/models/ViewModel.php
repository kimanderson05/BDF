<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:02 PM
 */

class ViewModel{

//    public function __construct(){
//
//    }
//
//    public function showHeader(){
//        include 'views/header.inc';
//    }
//
//    public function showList($value){
//        include 'views/body.inc';
//    }
//
//    public function showDetailed($value){
//        $row=$value[0];
//        include 'views/details.inc';
//    }
//
//    public function showFooter(){
//        include 'views/footer.inc';
//    }

    public function show($template, $user = '', $data =''){
        $path = "views/${template}.inc";
        if(file_exists($path)){
            include $path;
        }
    }

}