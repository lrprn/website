<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 4:25 PM
 */
require '../inc/important/header.php';
include('../inc/config/config.php');
include('session.php');
require '../inc/helper/background.php';

$userDetails=$userClass->userDetails($session_uid);
?>
<div class="w3-center w3-text-red">

<h1>Welcome <?php echo $userDetails->name; ?></h1>

<h4><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></h4>

</div>

<?php
require '../inc/important/footer.php';
?>