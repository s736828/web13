<?php

include_once "DB.php";

class Image extends DB{
    function __construct()
    {
        parent::__construct('image');
    }
}