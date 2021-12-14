<?php

while (true) {
    $input = '0e' . rand() . rand();
    $output = hash('md4', $input);

    if ($input == $output) {
        echo '[+] ' . $input . ' == ' . $output . PHP_EOL;
        break;
    }
}
