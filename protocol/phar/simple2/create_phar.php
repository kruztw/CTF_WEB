<?php 

$phar = new Phar('a.phar');
$phar ->buildFromDirectory(__DIR__.'/tmp');
$phar->setStub($phar->createDefaultStub('attack.php'));

