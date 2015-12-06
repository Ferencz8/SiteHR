<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 4:47 PM
 */

require("../../domainmodel/User.php");
session_start();
include("../../common/autoloader.php");
//include afiseaza un warning in caz de eroare si trece mai departe
include "init.php";

if(isset($_POST["btnLogin"])){
    if(strlen($_POST["txtUsername"]) == 0 || strlen($_POST["txtPassword"]) == 0){
        $_SESSION["err"] = "Please complete the fields!";
        header("Location: ../view/candidate/loginCandidateView.php");
    }
    else{
        foreach($_SESSION["users"] as $usr){
            if($_POST["txtUsername"] == $usr -> username && $_POST["txtPassword"] == $usr -> password){
                $_SESSION['loggedUser'] = $usr;


                header("Location: ../view/candidate/homeView.php");
                break;
            }
            else {
                $_SESSION["err"] = "Invalid username or password!";
                header("Location: ../view/candidate/loginCandidateView.php");
            }
        }
    }
}
if(isset($_POST["btnSignup"])){
    header("Location: ../view/candidate/signupCandidateView.php");
}
if(isset($_POST["btnLogOut"])){
//    clear the sesion
    session_unset();
    header("Location: ../view/startView.php");
}
?>
