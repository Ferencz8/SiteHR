<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 10:08 PM
 */

include("../../domainmodel/User.php");
session_start();
include("../../common/autoloader.php");
require_once("../../dal/userRepository.php");
include("../controller/init.php");

$usernameRegex = '/^[a-zA-Z0-9]{6,}$/';
$passwordRegex = '/^[a-zA-Z0-9]{6,}$/';

if (isset($_POST["btnForward"])) {

//Username
    if (isset($_POST["txtUsername"]) && $_POST["txtUsername"] !== '') {
        if (!preg_match($usernameRegex, $_POST["txtUsername"])) {
            array_push($_SESSION["errors"], "Username - min 6 characters, without special characters");
        } else {
            $username = $_POST["txtUsername"];
        }
    } else {
        array_push($_SESSION["errors"], "Username does not have value");
    }

//Password
    if (isset($_POST["txtPassword"]) && $_POST["txtPassword"] !== '') {
        if (!preg_match($passwordRegex, $_POST["txtPassword"])) {
            array_push($_SESSION["errors"], "Password - min 6 characters, without special characters");
        } else {
            $password = $_POST["txtPassword"];
        }
    } else {
        array_push($_SESSION["errors"], "Username does not have value");
    }

//Confirm Password
    if (isset($_POST["txtConfirmPassword"]) && $password === $_POST["txtConfirmPassword"]) {
        $confirmPassword = $_POST["txtConfirmPassword"];
    } else {
        array_push($_SESSION["errors"], "Confirm Password does not match password value");
    }

    if (count($_SESSION["errors"]) > 0) {
        header("Location: ../view/candidate/signupCandidate2View.php");
    } else {

        array_push($_SESSION["users"], new User(4, $username, $password));
        header("Location: ../view/candidate/loginCandidateView.php");
    }
} else {
    header("Location: ../view/candidate/signupCandidate2View.php");
}
?>