<?php
if($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') die("NO");
if($_POST['givemeflag'] === 'yes')
    echo "You Win !!";
?>
