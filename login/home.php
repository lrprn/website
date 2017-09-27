<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 4:25 PM
 */
require '../inc/config/login/important/header.php';
include('../inc/config/config.php');
include('session.php');
require '../inc/helper/login/background.php';

$userDetails=$userClass->userDetails($session_uid);
?>
<br>
<br>
<div class="w3-center w3-text-red">

<h1>Welcome <?php echo $userDetails->name; ?></h1>

<h4><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></h4>

</div>

<?php
require '../inc/important/footer.php';
?>