<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 4:17 PM
 */
session_start();
session_unset();

include ("../../common/autoloader.php");
?>
<html>
<head>
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/own.css">
</head>
<body>
<div class="container">
    <?php
        include("startHeaderView.php");
    ?>
</div>
<div class="center">
    <div class="Candidat">
        <a href="candidate/loginCandidateView.php" class="btn btn-default">Candidat</a>
    </div>
    <div class="Companie">
        <a href="loginCompanieView.php" class="btn btn-danger">Companie</a>
    </div>
</div>
</body>
</html>
