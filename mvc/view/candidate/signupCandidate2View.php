<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 10:20 PM
 */
session_start();
//
$_SESSION["txtFirstName"] = $_POST["txtFirstName"];
$_SESSION["txtLastName"] = $_POST["txtLastName"];
$_SESSION["txtBirthDate"] = $_POST["txtBirthDate"];
$_SESSION["txtAddress"] = $_POST["txtAddress"];
$_SESSION["txtPhone"] = $_POST["txtPhone"];
$_SESSION["txtEmail"] = $_POST["txtEmail"];
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
        <h3>Candidat Signup</h3>

        <form method="post" action="../../controller/signupController.php">

            <!--        <div class="error">--><?php //echo $_SESSION["err"]; ?><!--</div>-->

            <div>
                <div>Username</div>
                <input type="text" name="txtUsername"/>
            </div>
            <div>
                <div>Password</div>
                <input type="password" name="txtPassword"/>
            </div>
            <div>
                <div>Confirm Password
                </div>
                <input type="password" name="txtConfirmPassword"/>
            </div>
            <br>
            <a name="btnBack" class="btn btn-success" href="signupCandidateView.php">Back</a>
            <input type="submit" name="btnForward" value="Forward" class="btn btn-danger"/>


        </form>
    </div>
</div>
</body>
</html>
