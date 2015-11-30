<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/16/2015
 * Time: 11:38 PM
 */
include ("initValues.php");
class JobRepository{

    public function getAllJobs(){
        global $jobs;
        return $jobs;
    }
}
?>