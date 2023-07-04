<?php

include_once "DB.php";
class Admin extends DB{
    function __construct()
    {
        parent::__construct('admin');
    }
}