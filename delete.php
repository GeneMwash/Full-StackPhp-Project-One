<?php
session_start();
if (!isset($_SESSION["u_name"])){
    header("location:login_register.php");
}
?>

<?php
//Check if delete button has been clicked
if (isset($_GET["u_id"])){
    // now receive the id from url
    $userId = $_GET["u_id"];
    // connect ro database to delete
    require_once "db_connection.php";
    // create a delete query
    $deleteQuery = "DELETE FROM `users` WHERE id = '$userId'";
    // Finally delet using mysqli_query
    $delete = mysqli_query($connection,$deleteQuery);
    // Check if the deletion was succesful
    if (isset($delete)){
        // Redirect the user back to your user php file
        header("location:users.php");

    }else{
        echo "deletion failed";
    }
}