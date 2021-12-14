<?php

$dst = $_GET['url'];
$res = parse_url($dst);
$ip = dns_get_record($res['host'], DNS_A)[0]['ip'];

echo "ip = ".$ip;
sleep(1);

$dev_ip = "87.87.87.87";
if($ip === $dev_ip) {
    $content = file_get_contents($dst);
    die($content);
}
die('nope');
?>
	
