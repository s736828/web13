<?php


include_once "DB.php";

class Mvim extends DB{
    function __construct()
    {
        parent::__construct('mvim');
    }
}