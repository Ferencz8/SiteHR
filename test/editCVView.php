<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 1:45 PM
 */
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//function getElementByClass($class)
//{
//    $dom = new DomDocument();
//    $dom -> loadHTML(file_put_contents("C:\\xampp\\htdocs\\php-get-started\\SiteHR\\view\\candidate\\editCVView.php"));
//    $xpath = new DOMXPath($dom);
//    return $xpath->query("//*[@class='$class']")->item(0);
//}
//session_unset();
if (isset($_POST["btnAddEducation"])) {
    if ($_POST["btnAddEducation"] == "Add") {
        $_SESSION["education"] = true;
    } else if ($_POST["btnAddEducation"] == "Cancel") {
        $_SESSION["education"] = false;
    }
}

if (isset($_POST["btnAddProfessionalExperience"])) {
    if ($_POST["btnAddProfessionalExperience"] == "Add") {
        $_SESSION["professionalExperience"] = true;
    } else if ($_POST["btnAddProfessionalExperience"] == "Cancel") {
        $_SESSION["professionalExperience"] = false;
    }
}

//$url  = "http://localhost:8080/php-get-started/sitehr/view/candidate/editCVView.php";
//$t = fopen(, "r");
//$test = new HttpRequest("localhost:8080/php-get-started/sitehr/view/candidate/editCVView.php", HttpRequest::METH_GET);
//$t = $test -> getResponseBody();
//$test = getElementByClass('education');
//$t = file_get_contents($url, false);
?>
<html>
<head>
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/own.css">
</head>
<body>
<div class="navabar container">
    <p>Edit CV</p>

    <form method="post" action="../../controller/candidatController.php">
        <div class="row">Career Level</div>
        <div class="row">
            <span>Education</span>

            <form method="post">
                <input type="submit" class="btn btn-success" value="Add" name="btnAddEducation">
            </form>


            <!--            Education Info     -->
            <div class="education" <?php if (!isset($_SESSION["education"]) || $_SESSION["education"] === false){ ?>style="display:none"<?php } ?>>
                <div class="city">
                    <span>City</span>
                    <input type="text" name="txtCity">
                </div>
                <div class="institution">
                    <span>Institution</span>
                    <input type="text" name="txtInstitution">
                </div>
                <div class="startDate">
                    <span>Start Date</span>
                    <input type="date" name="txtStartDate">
                </div>
                <div class="endDate">
                    <span>End Date</span>
                    <input type="date" name="txtEndDate">
                </div>
                <form method="post">
                    <input type="submit" class="btn btn-success" value="Cancel" name="btnAddEducation">
                </form>
            </div>
        </div>

        <div class="row">
            <span>Professional Experience</span>

            <form method="post">
                <input type="submit" class="btn btn-success" value="Add" name="btnAddProfessionalExperience">
            </form>

            <!--            Professional Experience Info     -->
            <div id="professionalExperience"
                 <?php if (!isset($_SESSION["professionalExperience"]) || $_SESSION["professionalExperience"] === false){ ?>style="display:none"<?php } ?>>
                <div class="institution">
                    <span>Institution</span>
                    <input type="text" name="txtInstitution">
                </div>
                <div class="city">
                    <span>City</span>
                    <input type="text" name="txtCity">
                </div>
                <div class="position">
                    <span>Position</span>
                    <input type="text" name="txtPosition">
                </div>
                <div class="startDate">
                    <span>Start Date</span>
                    <input type="date" name="txtStartDate">
                </div>
                <div class="endDate">
                    <span>End Date</span>
                    <input type="date" name="txtEndDate">
                </div>
                <form method="post">
                    <input type="submit" class="btn btn-success" value="Cancel" name="btnAddProfessionalExperience">
                </form>
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Save">
    </form>
</div>
</body>
</html>
