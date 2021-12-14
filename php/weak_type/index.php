<?php

    /* string vs int : 特殊字元放前後都可, 其餘須放後 */
    echo var_dump("\n123"   == 123)."</br>"; // true
    echo var_dump("123\f"   == 123)."</br>"; // true
    echo var_dump("123a"    == 123)."</br>"; // true
    echo var_dump("\x00123" == 123)."</br>"; // false
    echo var_dump("\x01123" == 123)."</br>"; // false

    echo "</br>";
    /* string vs string : 特殊字元只能放前面, 其餘不能放*/
    echo var_dump("\n123" == "123")."</br>"; // true
    echo var_dump("123\f" == "123")."</br>"; // false
    echo var_dump("a123"  == "123")."</br>"; // false
    echo var_dump("123a"  == "123")."</br>"; // false
    
    echo "</br>";
    $str = "123";
    echo var_dump($str["fuck"])."</br>"; // "fuck" -> 0 
    echo var_dump($str["1"])."</br>"   ; // "1"
    echo var_dump($str["10"])."</br>"  ; // ""


    echo "</br>";
    $a[]="abc";
    $b  ="abc";
    echo var_dump(!strcmp($a, $b))."</br>"; // true
    echo var_dump($a == $b)       ."</br>"; // false

    echo var_dump([] == false)     ."</br>"; // true
    echo var_dump("1"+0.2 == 1.2)  ."</br>"; // true
    echo var_dump("1"+0.2 == "1.2")."</br>"; // true
    

    echo var_dump(md5([]) === sha1([]))."</br>"; // true
    echo var_dump(md5([]) == [])       ."</br>"; // true
    echo var_dump(md5([]) == NULL)     ."</br>"; // true
    echo var_dump("NULL"  == NULL)     ."</br>"; // false

?>
