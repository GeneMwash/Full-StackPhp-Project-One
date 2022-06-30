<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN|Register</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">

</head>
<body class="myHomeBg" >

<section>
    <div class="row contentDiv">
        <div class="col-2"></div>
        <div class="col-4 contentLeft p-3">
            <h4>LOGIN HERE</h4>
            <form method="post" action="login_handler.php">
                <input class="form-control" name="u_name" placeholder="Enter Name" type="text"><br>
                <input class="form-control" name="u_pass"  placeholder="Enter Password" type="password"><br>
                <input class="btn btn-info " name="btn-login" value="LOGIN" type="submit">
            </form>
        </div>
        <div class="col-4 contentRight p-3">
            <h4>REGISTER HERE</h4>
            <form method="post" action="register_handler.php">
                <input class="form-control" name="u_name" placeholder="Enter Name" type="text"><br>
                <input class="form-control" name="u_pass"  placeholder="Enter Password" type="password"><br>
                <input class="btn btn-info " name="btn_reg" value="Register" type="submit">
                <a class="btn btn-outline-success " href="users.php">View Users</a>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</section>

</body>
</html>
