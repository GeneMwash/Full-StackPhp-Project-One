<?php
// Check  if the update button is clicked
if (isset($_POST["btn_update"])){
    // Receive the updated data from the form
    $userId = $_POST["u_id"];
    $updatedName = $_POST["u_name"];
    $updatedPassword = $_POST["u_pass"];
    // Connect to thr data base to return data
    require_once "db_connection.php";
    //Create Update Query
    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`siri`='$updatedPassword' WHERE id =' $userId'";
   //mysqli_query here
    $update = mysqli_query($connection,$updateQuery);
    //Check if update was successful
    if (isset($update)){
        //Redirect the user to users.php to see changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }

}