<?php
	$url="https://www.google.com";
	$headers = get_headers($url);
	if (strpos( $headers[0], '200')) {
    	echo $url;
	}
?>