<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 1:01 PM
 */
session_start();
include("../../common/autoloader.php");
if(isset($_POST["save"])){
    $_SESSION["cv"] = new CV($_POST["txtCareerLevel"]);

    for($i = 1; $i<= $_SESSION["education"]; $i ++){
        array_push($_SESSION["cv"] -> educations, new Education());
        $_SESSION["cv"] -> educations[$i - 1] -> city = $_POST["txtCity" . $i . "Edu"];
        $_SESSION["cv"] -> educations[$i - 1] -> institution = $_POST["txtInstitution" . $i . "Edu"];
        $_SESSION["cv"] -> educations[$i - 1] -> startDate = $_POST["txtStartDate" . $i . "Edu"];
        $_SESSION["cv"] -> educations[$i - 1] -> endDate = $_POST["txtEndDate" . $i . "Edu"];
    }

    for($i = 1; $i<= $_SESSION["professionalExperience"]; $i ++){
        array_push($_SESSION["cv"] -> professional_experiences, new ProfessionalExperience());
        $_SESSION["cv"] -> professional_experiences[$i - 1] -> city = $_POST["txtCity" . $i . "ProfEdu"];
        $_SESSION["cv"] -> professional_experiences[$i - 1] -> institution = $_POST["txtInstitution" . $i . "ProfEdu"];
        $_SESSION["cv"] -> professional_experiences[$i - 1] -> startDate = $_POST["txtStartDate" . $i . "ProfEdu"];
        $_SESSION["cv"] -> professional_experiences[$i - 1] -> endDate = $_POST["txtEndDate" . $i . "ProfEdu"];
        $_SESSION["cv"] -> professional_experiences[$i - 1] -> position = $_POST["txtPosition" . $i . "ProfEdu"];
    }
}
header("Location: ../view/candidate/viewCVView.php");
?>