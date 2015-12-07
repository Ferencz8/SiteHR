<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 10:06 PM
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
        <h3>Candidat Signup</h3>

        <form method="post" action="signupCandidate2View.php">
            <!--    <div class="error">--><?php //echo $_SESSION["err"]; ?><!--</div>-->
            <fieldset>
                <legend>SignUp</legend>
                <div>
                    <span>First Name</span>
                    <input type="text" name="txtFirstName"/>
                </div>
                <div>
                    <span>Last Name</span>
                    <input type="text" name="txtLastName"/>
                </div>
                <div>
                    <span>BirthDate</span>
                    <input type="date" name="txtBirthDate"/>
                </div>
                <div>
                    <span>Address</span>
                    <input type="text" name="txtAddress"/>
                </div>
                <div>
                    <span>Phone</span>
                    <input type="text" name="txtPhone"/>
                </div>
                <div>
                    <span>Email</span>
                    <input type="text" name="txtEmail"/>
                </div>
                <input type="submit" name="btnnext" value="Next"/>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>