<?php
if(isset($_GET['file'])) {
    $page = $_GET['file'];

    try {
        include("$page");
    } 
    catch (Exception $e) {}
}

