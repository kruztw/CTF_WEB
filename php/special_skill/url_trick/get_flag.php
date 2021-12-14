<?php

$URL = $_SERVER['REQUEST_URI'];

if ($URL == "/get_flag.php")
    die("no flag");

include "/flag";
