<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 4:24 PM
 */


$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

if($_SESSION['ip'] != $_SERVER['REMOTE_ADDR'])
{
//die('Session MAY have been hijacked');
    $url=BASE_URL.'logout.php';
    header("Location: $url");
}

if(!empty($_SESSION['uid']))
{
    $session_uid=$_SESSION['uid'];
    include('../inc/config/login/userClass.php');
    $userClass = new userClass();
}
if(empty($session_uid))
{
    $url=BASE_URL.'index.php';
    header("Location: $url");
}
?>