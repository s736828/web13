<?php

include_once "DB.php";

class Total extends DB{
    function __construct()
    {
        parent::__construct('total');
    }
}