<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 4:18 PM
 */
include("../inc/config/config.php");
include('../inc/login/userClass.php');
$userClass = new userClass();

/* Signup Form */
if (!empty($_POST['signupSubmit']))
{
    $username=$_POST['usernameReg'];
    $email=$_POST['emailReg'];
    $password=$_POST['passwordReg'];
    $name=$_POST['nameReg'];
    /* Regular expression check */
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if($username_check && $email_check && $password_check && strlen(trim($name))>0)
    {
        $uid=$userClass->userRegistration($username,$password,$email,$name);
        if($uid)
        {
            $url=BASE_URL.'home.php';
            header("Location: $url"); // Page redirecting to home.php
        }
        else
        {
            $errorMsgReg="Username or Email already exists.";
        }
    }
}
?>

<div class="w3-center">

    <div id="signup">
        <h3>Registration</h3>
        <form method="post" action="" name="signup">
            <label>Name</label>
            <input type="text" name="nameReg" autocomplete="off" />
            <label>Email</label>
            <input type="text" name="emailReg" autocomplete="off" />
            <label>Username</label>
            <input type="text" name="usernameReg" autocomplete="off" />
            <label>Password</label>
            <input type="password" name="passwordReg" autocomplete="off"/>
            <div class="errorMsg"><?php echo $errorMsgReg; ?></div>
            <input type="submit" class="button" name="signupSubmit" value="Signup">
            <a href="index.php">LOGIN</a>
        </form>
    </div>

</div>
