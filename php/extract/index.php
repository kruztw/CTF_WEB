<?php
$user_db = [
    'root'
];

function check_user($json) {
    global $user_db;
    extract(json_decode($json, true));
    echo $user." is ".(in_array($user, $user_db) ? "valid" : "invalid")."\n";
}

check_user('{"user":"root"}');
check_user('{"user":"kruztw"}');
echo "-------------------------\n";
check_user('{"user":"kruztw", "user_db":["kruztw"]}');
check_user('{"user":"root"}');


?>
