<?php
    include "config.php";

    $con = new mysqli($server, $db_user, $db_password, $db);
    $con->query("set names utf8");

    $user = $_POST["user"];
    if ($user === "admin")
        die("nope");

    $query = "SELECT * FROM users WHERE user='$user'";
    echo $query."</br></br>";
    
    $result = $con->query($query);
    while ($row = $result->fetch_array())
        echo var_dump($row);
?>
