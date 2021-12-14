<?php 

# 問題點: $_REQUEST 先查看 $_GET  再查看 $_POST, 所以 $_POST 的變數會蓋掉 $_GET
#         但 reqs 是先查看 $_POST 再查看 $_GET , 所以 $_GET  會蓋掉 $_POST

if(!isset($_SESSION["logged"]))
    $_SESSION["logged"] = 0;
   
foreach($_REQUEST as $request)
    if(is_array($request))
        die("Can not use Array in request!");
   
$reqs = array($_POST, $_GET);
if(isset($_SESSION))
    array_unshift($superglobals, $_SESSION);

foreach($reqs as $req)
    extract($req, 0);
   
if(is_array($_SESSION) && $_SESSION["logged"] == 1)
    echo "yes";
