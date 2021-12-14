<?php
    /* 若存在 sql injection, 可透過此方法取得另一個 table 的值 (前提是要能存取當下 table 的值) */

    include "config.php";
    $con = new mysqli($server, $db_user, $db_password, $db);
    
    $init = 0;
    if ($init) {
        $query = "create table a (
                      user   varchar(100),
                      passwd varchar(100)
                  );";
        $result = $con->query($query);
        
        $query = "create table b (
                      user   varchar(100),
                      passwd varchar(100)
                  );";
        $result = $con->query($query);
        
        $query = "insert into a (user, passwd) values ('root', 'secret');";
        $result = $con->query($query);
        
    }

    $query = "insert into b (user, passwd) values ('admin', (select passwd from a));";
    $result = $con->query($query);
?>
