<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 2:21 PM
 */

class EducationModel{

    private $city;
    private $institution;
    private $startDate;
    private $endDate;

    function __construct(){

    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this -> $property;
        }
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this -> $property = $value;
        }
    }
}
?>