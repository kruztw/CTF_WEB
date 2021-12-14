<?php

class Cat {
    public $a;         {s:1:"a";...}
    protected $b;      {s:4:"\x00*\x00b";...}
    private $c;        {s:6:"\x00Cat\x00c";...}
}

$cat = new Cat;
echo serialize($cat);

?>
