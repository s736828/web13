<?php

include_once "DB.php";

class Ad extends DB{
    function __construct()
    {
        parent::__construct('ad');
    }
}
