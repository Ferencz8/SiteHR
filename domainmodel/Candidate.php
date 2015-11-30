<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/14/2015
 * Time: 11:49 PM
 */
class Candidate{

    private $id;
    private $firstname;
    private $lastname;
    private $birthdate;
    private $address;
    private $phone;
    private $email;
    private $user;
    private $cv;
    private $appliedJobs;

    function __construct($fn, User $u = NULL){
        $this -> firstname = $fn;
    }


}
?>