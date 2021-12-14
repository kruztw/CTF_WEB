<?php

//https://blog.spoock.com/2016/11/03/php-wakeup/
class foo{
    public $a = 'b';

    function __wakeup() {
        echo "__wakeup is invoked<br>";
    }    
    function __destruct() {
        echo "__destruct is invoked<br>";
    }
}

$f = new foo();
echo "common case<br>";
unserialize(serialize($f));
echo "<br> attack <br>";
unserialize('O:3:"foo":2:{s:1:"a";s:1:"b";}');


?>
