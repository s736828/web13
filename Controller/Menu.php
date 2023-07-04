<?php

include_once "DB.php";

class Menu extends DB{
    function __construct()
    {
        parent::__construct('menu');
    }
}