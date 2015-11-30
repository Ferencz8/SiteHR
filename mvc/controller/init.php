<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 4:54 PM
 */
session_start();
if(!isset($_SESSION["err"])){
    $_SESSION["err"] = "";
}

if(!isset($_SESSION["users"]))
{
    $users = array("ion" => "ion123", "maria" => "maria123");
    $_SESSION["users"] = $users;
}