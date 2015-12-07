<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 10:20 PM
 */
session_start();
$allText = '/^[a-zA-Z]+$/';
$phoneRegex = '/^[0-9]{10,}$/';
$textAndNumbers = '/^[a-zA-Z0-9]+$/';
$_SESSION["errors"] = array();

//First Name
if (isset($_POST["txtFirstName"]) && $_POST["txtFirstName"] !== '') {
    if (!preg_match($allText, $_POST["txtFirstName"])) {
        array_push($_SESSION["errors"], "First Name - only literals");
    } else {
        $_SESSION["txtFirstName"] = $_POST["txtFirstName"];
    }

} else {
    array_push($_SESSION["errors"], "First Name does not have value");
}

//Last Name
if (isset($_POST["txtLastName"]) && $_POST["txtLastName"] !== '') {
    if (!preg_match($allText, $_POST["txtLastName"])) {
        array_push($_SESSION["errors"], "Last Name - only literals");
    } else {
        $_SESSION["txtLastName"] = $_POST["txtLastName"];
    }
} else {
    array_push($_SESSION["errors"], "Last Name does not have value");
}

//Birth Date
if (isset($_POST["txtBirthDate"]) && $_POST["txtBirthDate"] !== '') {

    $_SESSION["txtBirthDate"] = $_POST["txtBirthDate"];
} else {
    array_push($_SESSION["errors"], "Birth Date does not have value");
}

//Address
$_SESSION["txtAddress"] = $_POST["txtAddress"];

//Phone
if (isset($_POST["txtPhone"]) && $_POST["txtPhone"] !== '') {
    if (!preg_match($phoneRegex, $_POST["txtPhone"])) {
        array_push($_SESSION["errors"], "Phone - only numbers");
    } else {
        $_SESSION["txtPhone"] = $_POST["txtPhone"];
    }
} else {
    array_push($_SESSION["errors"], "Phone does not have value");
}

//Email
if(isset($_POST["txtEmail"])) {
    if (filter_var($_POST["txtEmail"], FILTER_VALIDATE_EMAIL)) {

        $_SESSION["txtEmail"] = $_POST["txtEmail"];
    } else {
        array_push($_SESSION["errors"], "Email - wrong format");
    }
} else {
    array_push($_SESSION["errors"], "Email does not have value");
}

if (count($_SESSION["errors"]) > 0) {
    header("Location: ../candidate/signupCandidateView.php");
}
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
