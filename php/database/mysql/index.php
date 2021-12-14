<?php
    include "config.php";
    $id     = @(float)$_POST['id'];

    $ban = 1;
    if ($id == $ban)
        die("nope!");
    
    $query = "SELECT * FROM users WHERE id = $id";
    echo $query."</br></br>";
    
    $con = new mysqli($server, $db_user, $db_password, $db);
    $result = $con->query($query);
    while ($row = $result->fetch_array())
        echo var_dump($row);
?>
