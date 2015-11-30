<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 4:47 PM
 */
//include afiseaza un warning in caz de eroare si trece mai departe
include "init.php";
//require_once afiseaza un fatal error si nu mai merge mai departe
//require_once("../../domainmodel/User.php");
include("../../common/autoloader.php");

if(isset($_POST["btnLogin"])){
    if(strlen($_POST["txtUsername"]) == 0 || strlen($_POST["txtPassword"]) == 0){
        $_SESSION["err"] = "Please complete the fields!";
        header("Location: ../view/candidate/loginCandidateView.php");
    }
    else{
        foreach($_SESSION["users"] as $key => $value){
            $userObjects[] = new User($key, $value);
        }
        foreach($userObjects as $usr){
            if($_POST["txtUsername"] == $usr -> username && $_POST["txtPassword"] == $usr -> password){
                $_SESSION['user'] = $usr ->username;


                header("Location: ../view/candidate/accountView.php");
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
?>
