<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 1:11 AM
 */

session_start();
//session_unset();

if (isset($_POST["btnAddEducation"])) {
    if(!isset($_SESSION["education"])){
        $_SESSION["education"] = 0;
    }

    if ($_POST["btnAddEducation"] == "+") {

        $_SESSION["education"]++;
    } else if($_POST["btnAddEducation"] == "-" && $_SESSION["education"] > 0){
        $_SESSION["education"]--;
    }
}

if (isset($_POST["btnAddProfessionalExperience"])) {
    if(!isset($_SESSION["professionalExperience"])){
        $_SESSION["professionalExperience"] = 0;
    }

    if ($_POST["btnAddProfessionalExperience"] == "+") {

        $_SESSION["professionalExperience"]++;
    } else if ($_POST["btnAddProfessionalExperience"] == "-" && $_SESSION["professionalExperience"] > 0) {
        $_SESSION["professionalExperience"]--;
    }
}
?>
<html>
<head>
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/own.css">
</head>
<body>
<div class="navabar container">
    <p>Edit CV</p>


    <div class="row">
        <span>Career Level</span>
        <input type="text" form="saveCV" name="txtCareerLevel">
    </div>
    <div class="row">
        <span>Education</span>

        <form method="post" id="addEducationForm">
            <input type="submit" class="btn btn-success" value="+" name="btnAddEducation" form="addEducationForm">
        </form>
        <!--            Education Info     -->
        <?php
        if (isset($_SESSION["education"]) && $_SESSION["education"] > 0) {
            for ($i = 1; $i <= $_SESSION["education"]; $i++) {
                echo "
                    <div class=\"education\">
                        <div class=\"city\">
                            <span>City</span>
                            <input form='saveCV' type=\"text\" name=\"txtCity" . $i . "Edu"."\">
                        </div>
                        <div class=\"institution\">
                            <span>Institution</span>
                            <input form='saveCV' type=\"text\" name=\"txtInstitution" . $i . "Edu"."\">
                        </div>
                        <div class=\"startDate\">
                            <span>Start Date</span>
                            <input form='saveCV' type=\"date\" name=\"txtStartDate" . $i . "Edu"."\">
                        </div>
                        <div class=\"endDate\">
                            <span>End Date</span>
                            <input form='saveCV' type=\"date\" name=\"txtEndDate" . $i . "Edu"."\">
                        </div>
                    </div>
                    <br/>";
            }
            echo "  <form method='post'>
                            <input type='submit' class='btn btn-success' value='-' name='btnAddEducation'>
                        </form>";
        }
        ?>

    </div>

    <div class="row">
        <span>Professional Experience</span>

        <form method="post">
            <input type="submit" class="btn btn-success" value="+" name="btnAddProfessionalExperience">
        </form>

        <!--            Professional Experience Info     -->
        <?php
        if (isset($_SESSION["professionalExperience"]) && $_SESSION["professionalExperience"] > 0) {
            for ($i = 1; $i <= $_SESSION["professionalExperience"]; $i++) {
                echo "
                <div id='professionalExperience'>
                    <div class='institution'>
                        <span>Institution</span>
                        <input form='saveCV' type='text' name='txtInstitution" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='city'>
                        <span>City</span>s
                        <input form='saveCV' type='text' name='txtCity>" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='position'>
                        <span>Position</span>
                        <input form='saveCV' type='text' name='txtPosition" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='startDate'>
                        <span>Start Date</span>
                        <input form='saveCV' type='date' name='txtStartDate" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='endDate'>
                        <span>End Date</span>
                        <input form='saveCV' type='date' name='txtEndDate" . $i . "ProfEdu" . "'>
                    </div>
                </div>
                <br/>";
            }

            echo " <form method='post'>
                        <input type='submit' class='btn btn-success' value='-' name='btnAddProfessionalExperience'>
                    </form>";
        }
        ?>

    </div>
    <div class="row">
        <form id="saveCV" method="post" action="../../controller/candidateController.php">
            <input type="submit" class="btn btn-success" value="Save" name="save">
        </form>
    </div>
</div>
</body>
</html>
