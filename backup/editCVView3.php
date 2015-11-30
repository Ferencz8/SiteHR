<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/16/2015
 * Time: 2:48 PM
 */

include("../../model/CVModel.php");
include("../../model/EducationModel.php");
include("../../model/ProfessionalExperienceModel.php");
session_start();
function storeEducationInputsInSession()
{
    for ($i = 0; $i < count($_SESSION["cv"]->educations); $i++) {
        $_SESSION["cv"]->educations[$i]->city = isset($_POST["txtCity" . $i . "Edu"]) ? $_POST["txtCity" . $i . "Edu"] : null;
        $_SESSION["cv"]->educations[$i]->institution = isset($_POST["txtInstitution" . $i . "Edu"]) ? $_POST["txtInstitution" . $i . "Edu"] : null;
        $_SESSION["cv"]->educations[$i]->startDate = isset($_POST["txtStartDate" . $i . "Edu"]) ? $_POST["txtStartDate" . $i . "Edu"] : null;
        $_SESSION["cv"]->educations[$i]->endDate = isset($_POST["txtEndDate" . $i . "Edu"]) ? $_POST["txtEndDate" . $i . "Edu"] : null;
    }
}

function storeProfessionalExperienceInputsInSession()
{
    for ($i = 0; $i < count($_SESSION["cv"]->professional_experiences); $i++) {
        $_SESSION["cv"]->professional_experiences[$i]->city = isset($_POST["txtCity" . $i . "ProfEdu"]) ? $_POST["txtCity" . $i . "ProfEdu"] : null;
        $_SESSION["cv"]->professional_experiences[$i]->institution = isset($_POST["txtInstitution" . $i . "ProfEdu"]) ? $_POST["txtInstitution" . $i . "ProfEdu"] : null;
        $_SESSION["cv"]->professional_experiences[$i]->startDate = isset($_POST["txtStartDate" . $i . "ProfEdu"]) ? $_POST["txtStartDate" . $i . "ProfEdu"] : null;
        $_SESSION["cv"]->professional_experiences[$i]->endDate = isset($_POST["txtEndDate" . $i . "ProfEdu"]) ? $_POST["txtEndDate" . $i . "ProfEdu"] : null;
        $_SESSION["cv"]->professional_experiences[$i]->endDate = isset($_POST["txtPosition" . $i . "ProfEdu"]) ? $_POST["txtPosition" . $i . "ProfEdu"] : null;
    }
}

//session_unset();
if (!isset($_SESSION["cv"])) {
    $_SESSION["cv"] = new CVModel("");
}

$registeredFlag = true;
if (isset($_POST["btnAddEducation"])) {
    if ($_POST["btnAddEducation"] == "+") {

        array_push($_SESSION["cv"]->educations, new EducationModel());
        storeEducationInputsInSession();
        $registeredFlag = false;
    } else if ($_POST["btnAddEducation"] == "-") {
        array_pop($_SESSION["cv"]->educations);
    }
}

if (isset($_POST["btnAddProfessionalExperience"])) {
    if ($_POST["btnAddProfessionalExperience"] == "+") {

        array_push($_SESSION["cv"]->professional_experiences, new ProfessionalExperienceModel());
        storeProfessionalExperienceInputsInSession();
        $registeredFlag = false;
    } else if ($_POST["btnAddProfessionalExperience"] == "-") {
        array_pop($_SESSION["cv"]->professional_experiences);
    }
}

if (isset($_POST["btnRegister"])) {
    storeEducationInputsInSession();
    storeProfessionalExperienceInputsInSession();
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


    <div class="row">Career Level</div>
    <div class="row">
        <span>Education</span>

        <form method="post" id="addEducationForm">
            <input type="submit" class="btn btn-success" value="+" name="btnAddEducation" form="addEducationForm">
        </form>
        <!--            Education Info     -->
        <?php
        if (isset($_SESSION["cv"]) && ($count = count($_SESSION["cv"]->educations)) > 0) {
            for ($i = 0; $i < $count; $i++) {
                echo "
                    <div class=\"education\">
                        <div class=\"city\">
                            <span>City</span>
                            <input form='registerInputs' type=\"text\" name=\"txtCity" . $i . "Edu" . "\" value=\"" . $_SESSION["cv"]->educations[$i]->city . "\">
                        </div>
                        <div class=\"institution\">
                            <span>Institution</span>
                            <input form='registerInputs' type=\"text\" name=\"txtInstitution" . $i . "Edu" . "\" value=\"" . $_SESSION["cv"]->educations[$i]->institution . "\">
                        </div>
                        <div class=\"startDate\">
                            <span>Start Date</span>
                            <input form='registerInputs' type=\"date\" name=\"txtStartDate" . $i . "Edu" . "\" value=\"" . $_SESSION["cv"]->educations[$i]->startDate . "\">
                        </div>
                        <div class=\"endDate\">
                            <span>End Date</span>
                            <input form='registerInputs' type=\"date\" name=\"txtEndDate" . $i . "Edu" . "\" value=\"" . $_SESSION["cv"]->educations[$i]->endDate . "\">
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
        if (isset($_SESSION["cv"]) && ($count = count($_SESSION["cv"]->professional_experiences)) > 0) {
            for ($i = 0; $i < $count; $i++) {
                echo "
                <div id='professionalExperience'>
                    <div class='institution'>
                        <span>Institution</span>
                        <input form='registerInputs' type='text' name='txtInstitution'" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='city'>
                        <span>City</span>
                        <input form='registerInputs' type='text' name='txtCity>'" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='position'>
                        <span>Position</span>
                        <input form='registerInputs' type='text' name='txtPosition'" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='startDate'>
                        <span>Start Date</span>
                        <input form='registerInputs' type='date' name='txtStartDate'" . $i . "ProfEdu" . "'>
                    </div>
                    <div class='endDate'>
                        <span>End Date</span>
                        <input form='registerInputs' type='date' name='txtEndDate'" . $i . "ProfEdu" . "'>
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
        <form id="registerInputs" method='post'>
            <input type='submit' class='btn  <?php echo $registeredFlag == true ? "btn-success" : "btn-danger"; ?>'
                   value='<?php echo $registeredFlag == true ? "Registered" : "Register"; ?>'' name='btnRegister'>
        </form>
        <form id="saveCV" method="post" action="../../controller/candidatController.php">
            <input type="submit" class="btn btn-success" value="Save">
        </form>
    </div>
</div>
</body>
</html>
