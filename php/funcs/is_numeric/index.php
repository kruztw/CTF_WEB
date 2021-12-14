<?php
    // true
    echo var_dump(is_numeric(1))."</br>";
    echo var_dump(is_numeric("1"))."</br>";
    echo var_dump(is_numeric("1.1"))."</br>";
    echo var_dump(is_numeric("+1.1"))."</br>";
    echo var_dump(is_numeric("\n1.1"))."</br>";
    echo var_dump(is_numeric("\r1.1"))."</br>";
    echo var_dump(is_numeric("\f1.1"))."</br>";

    // false
    echo var_dump(is_numeric("\x001"))."</br>";
    echo var_dump(is_numeric("++1"))."</br>";
    
