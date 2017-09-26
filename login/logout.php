<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 4:26 PM
 */

include('../inc/config/config.php');
$session_uid='';
$_SESSION['uid']='';
if(empty($session_uid) && empty($_SESSION['uid']))
{
    $url=BASE_URL.'index.php';
    header("Location: $url");
//echo "<script>window.location='$url'</script>";
}
?>