<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 4:54 PM
 */
if(!isset($_SESSION["err"])){
    $_SESSION["err"] = "";
}

if(!isset($_SESSION["users"]))
{
    $users = array(new User(1, "ion", "ion123"), new User(2, "maria", "maria123"));
    $_SESSION["users"] = $users;
}