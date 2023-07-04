<?php

include_once "DB.php";

class News extends DB{
    function __construct()
    {
        parent::__construct('news');
    }
}