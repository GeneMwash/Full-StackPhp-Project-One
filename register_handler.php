<?php
//Check if button is clicked
if (isset($_POST["btn_reg"])) {
    //receive data as follows
    $name = $_POST["u_name"];
    $password = $_POST["u_pass"];
    $encryptedPassword =md5($password);
    // connecting to db
    require_once "db_connection.php";
    //mysqli_query
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `siri`) VALUES (Null,'$name','$encryptedPassword')";
    //Checking for existing users

    $selectExistingUserQuery = "SELECT * FROM `users` WHERE jina = '$name'";
    $existingUsers = mysqli_query($connection, $selectExistingUserQuery );
    $countExistingUser = mysqli_num_rows($existingUsers);
    //
    if ( $existingUsers > 0 )

    //save data to db
    $save = mysqli_query($connection, $insertQuery);
    // check if connection is working
    if (isset($save)) {
        echo "User registered successfully, Thank u";
    } else {
        echo "User registration failed,Please try again later";
    }
}