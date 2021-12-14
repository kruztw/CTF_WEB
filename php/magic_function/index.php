<?php
    
    class Cat {
    	public $voice="meow";
    	function __construct() { echo "__construct\n"; }
    	function __toString() { return "__toString\n"; }
    	function __destruct() { echo "__destruct\n"; }
    	function __call($func, $args) { echo "__call\n"; }
    	function __sleep() { echo "__sleep\n"; return array("voice"); }
    	function __wakeup() { echo "__wakeup\n"; }
    	function __invoke() { echo "__invoked\n";}
    	function __clone() { echo "__clone\n"; }
    	function __set_state() { echo "__set_state\n"; }
    	function __get($var) { echo "__get\n"; }
    	function __set($var, $val) { echo "__set\n";}
    }

    $cat1 = new Cat;                        // __construct
    echo $cat1;                             // __toString
    $cat1->meow();                          // __call
    $a=serialize($cat1);                    // __sleep
    unserialize($a);                        // __wakeup
    echo $cat1();                           // __invoked
    clone $cat1;                            // __clone
    eval(var_export($cat1, true).';');      // __set_state
    $cat1->bark;                            // __get
    $cat1->bark = 1;                        // __set
                                            // __destruct
?>                    