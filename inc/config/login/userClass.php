<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 9/26/17
 * Time: 4:20 PM
 */
class userClass
{
    /* User Login */
    public function userLogin($usernameEmail,$password)
    {
        try{
            $db = getDB();
            $hash_password= hash('sha256', $password); //Password encryption
            $stmt = $db->prepare("SELECT uid FROM users WHERE (username=:usernameEmail or email=:usernameEmail) AND password=:hash_password");
            $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
            $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if($count)
            {
                $_SESSION['uid']=$data->uid; // Storing user session value
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }

    }

    /* User Registration */
    public function userRegistration($username,$password,$email,$name)
    {
        try{
            $db = getDB();
            $st = $db->prepare("SELECT uid FROM users WHERE username=:username OR email=:email");
            $st->bindParam("username", $username,PDO::PARAM_STR);
            $st->bindParam("email", $email,PDO::PARAM_STR);
            $st->execute();
            $count=$st->rowCount();
            if($count<1)
            {
                $stmt = $db->prepare("INSERT INTO users(username,password,email,name) VALUES (:username,:hash_password,:email,:name)");
                $stmt->bindParam("username", $username,PDO::PARAM_STR) ;
                $hash_password= hash('sha256', $password); //Password encryption
                $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
                $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
                $stmt->bindParam("name", $name,PDO::PARAM_STR) ;
                $stmt->execute();
                $uid=$db->lastInsertId(); // Last inserted row id
                $db = null;
                $_SESSION['uid']=$uid;
                return true;
            }
            else
            {
                $db = null;
                return false;
            }

        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }

    /* User Details */
    public function userDetails($uid)
    {
        try{
            $db = getDB();
            $stmt = $db->prepare("SELECT email,username,name FROM users WHERE uid=:uid");
            $stmt->bindParam("uid", $uid,PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
            return $data;
        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
}
?>