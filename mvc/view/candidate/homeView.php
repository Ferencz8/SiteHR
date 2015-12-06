<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 12:58 AM
 */

include ("../../../common/autoloader.php");
require("../../../domainmodel/User.php");
require("../../../dal/jobRepository.php");
session_start();

$jobRepository = new JobRepository();
if(isset($_SESSION["loggedUser"])){
    $_SESSION["allJobs"] = $jobRepository->getJobs($_SESSION["loggedUser"]->id);
}
else {
    $_SESSION["allJobs"] = $jobRepository->getAllJobs();
}
?>
<html>
<head>
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/own.css">
</head>
<body>
<div class="container">
    <?php
    if( isset($_SESSION["loggedUser"])) {
        require("headerView.php");
    }
    else{
        require("../startHeaderView.php");
    }?>

    <h3>Candidate Home</h3>

    <div>
        <div>Filters</div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Job</th>
                <th>Company</th>
                <th>Available Positions</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($_SESSION["allJobs"] as $job) {
                echo '
                <tr>
                    <th scope="row">1</th>
                    <th>' . $job->title . '</th>
                    <th>' . $job->company->name . '</th>
                    <th>' . $job->availablePositions . '</th>
                    <th>' . $job->startDate . '</th>
                    <th>' . $job->endDate . '</th>
                </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>