<?php

$admin = 0;
parse_str($_SERVER['QUERY_STRING']);

if ($admin == 1)
    echo "Hi, admin";

