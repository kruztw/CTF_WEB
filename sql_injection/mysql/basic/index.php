<?php
    include "config.php";
    if (isset($_POST["user"]) && isset($_POST["passwd"])) {
        $user   = $_POST["user"];
        $passwd = $_POST["passwd"];
    }

    $query = "SELECT * FROM users WHERE user='$user' and passwd='$passwd'";
    echo $query."</br></br>";
    
    $con = new mysqli($server, $db_user, $db_password, $db);
    $result = $con->query($query);
    while ($row = $result->fetch_array())
        echo var_dump($row);
?>
