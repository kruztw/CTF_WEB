<?php
  include "config.php";
  $answer = "";
  if(isset($_POST["answer"]))
    $answer = $_POST["answer"];

  $query = "SELECT * FROM brute_force WHERE answer='$answer'";

  $con = new mysqli($server, $user, $password, $db);
  $result = $con->query($query);
  $row = $result->num_rows;

  if ($row) {
    echo "<h1>You are so close.</h1>";
  } else {
    echo "<h1>Wrong.</h1>";
  }
?>