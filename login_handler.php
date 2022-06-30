<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/16/22
 * Time: 10:55 AM
 */

//Check if button is clicked
if (isset($_POST["btn-login"])) {
    //receive data as follows
    $name = $_POST["u_name"];
    $password = $_POST["u_pass"];
    $encryptedPassword =md5($password);


    // connecting to db
    require_once "db_connection.php";
    $selectUserQuery = "SELECT * FROM `users` WHERE jina = '$name'and 
siri '$encryptedPassword'";

    $existingUsers =  mysqli_query($connection,$selectUserQuery);
    $countExistingUsers = mysqli_num_rows( $existingUsers);

    if ($countExistingUsers > 0){
    session_start();
    $_SESSION ["u_name"] = $name;
    header("location:home.php");
    }else{
        echo "Wrong UserName or Password";
    }
}

