<?php
    class Cat { }
    $phar = new Phar("pharfile.phar");
    $phar->startBuffering();
    $phar->setStub("<?php __HALT_COMPILER(); ?>");
    /*$phar->setStub("GIF89<?php __HALT_COMPILER(); ?>"); 由於 phar 後面會放整體 hash, 所以如果要改 magic file, 請在這改*/
    $c = new Cat();
    $phar->setMetadata($c);
    $phar->addFromString("meow.txt", "owo"); // 至少要一個, 不然不會生檔案
    $phar->stopBuffering();
?>
