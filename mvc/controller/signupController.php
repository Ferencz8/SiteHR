<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 10:08 PM
 */

include("../../common/autoloader.php");
//require_once("../model/User.php");

require_once("../../dal/userRepository.php");
include("../controller/init.php");
$username = $_POST["txtUsername"];
$password = $_POST["txtPassword"];
$confirmPassword = $_POST["txtConfirmPassword"];
if(isset($_POST["btnForward"])){

    $_SESSION["users"][$username] = $password;
    header("Location: ../view/candidate/loginCandidateView.php");
}
else{
    header("Location: ../view/candidate/signupCandidatView");
}
?>