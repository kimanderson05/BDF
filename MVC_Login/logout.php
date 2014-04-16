<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/15/14
 * Time: 9:24 PM
 */

session_start();
unset($_SESSION['userInfo']);

session_regenerate_id(true);

header('Location: index.php');
exit();