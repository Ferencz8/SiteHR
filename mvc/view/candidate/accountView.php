<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 12:58 AM
 */

include("../../../dal/jobRepository.php");
session_start();

$jobRepository = new JobRepository();
$_SESSION["allJobs"] = $jobRepository -> getAllJobs();
?>
<html>
<head>
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/own.css">
</head>
<body>
<div class="navabar">
    <p>Candidat Home</p>

    <div>
        <div class="col-lg-2">
            <a href="">Home</a>
        </div>
        <div class="col-lg-2">
            <a href="editCVView.php">Edit CV</a>
        </div>
        <div class="col-lg-2">
            <a href="viewCVView.php">View CV</a>
        </div>
    </div>

</div>
<div>
    <div>Filters</div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-1 text-center" style="">
            <span>Job</span>
        </div>
        <div class="col-lg-4 text-center">
            <span>Company</span>
        </div>
        <div class="col-lg-1 text-center">
            <span>Available Positions</span>
        </div>
        <div class="col-lg-1 text-center">
            <span>Start Date</span>
        </div>
        <div class="col-lg-1 text-center">
            <span>End Date</span>
        </div>
    </div>

    <?php
    foreach($_SESSION["allJobs"] as $job){
        echo ' <div class="row">
        <div class="col-lg-4 col-lg-offset-1 text-center" style="">
            <span>' . $job -> title .'</span>
        </div>
        <div class="col-lg-4 text-center">
            <span>' . $job -> company -> name .'</span>
        </div>
        <div class="col-lg-1 text-center">
            <span>' . $job -> availablePositions .'</span>
        </div>
        <div class="col-lg-1 text-center">
            <span>' . $job -> startDate .'</span>
        </div>
        <div class="col-lg-1 text-center">
            <span>' . $job -> endDate .'</span>
        </div>
    </div>';
    }
    ?>
</div>
</body>
</html>