<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 4:30 PM
 */
session_start();
?>
<html>
<head>
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/own.css">
</head>
<body>
<div class="container">
    <?php require("../startHeaderView.php"); ?>
    <br/><br/><br/><br/>
    <div class="col-lg-offset-4">
        <h1>Candidat Login</h1>
        <br/>

        <form method="post" action="../../controller/loginController.php">
            <div class="error" style="color:red">
                <?php
                if (isset($_SESSION["err"])) {
                    echo $_SESSION["err"];
                    $_SESSION["err"] = '';
                }
                ?>
            </div>
            <fieldset>
                <legend>Login</legend>
                <div>
                    <span>Username</span>
                    <input type="text" name="txtUsername"/>
                </div>
                <div>
                    <span>Password</span>
                    <input type="password" name="txtPassword"/>
                </div>
                <input type="submit" name="btnLogin" value="Login"/>
                <input type="submit" name="btnSignup" value="Sign Up"/>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
