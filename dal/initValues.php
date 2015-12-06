<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/16/2015
 * Time: 11:39 PM
 */
include("C:\\xampp\\htdocs\\php-get-started\\SiteHR\\domainmodel\\BaseModel.php");
include("C:\\xampp\\htdocs\\php-get-started\\SiteHR\\domainmodel\\Job.php");
include("C:\\xampp\\htdocs\\php-get-started\\SiteHR\\domainmodel\\Company.php");
$j = new Job("", "TestTitle", "", "", "", new Company("", "Software"));
$jobs = array($j, new Job("", "Title 2", "", "", "", new Company("", "Software")));
$specificJobs = array(new Job("", "Specific Title", "", "", "", new Company("", "Software")));
?>