<?php
    # trim 不會去掉 \f
    # 挺怪的, 原始碼說會去掉 \v, 但似乎沒有, 可是在測 https://github.com/wonderkun/CTF_web/blob/master/threebaimao/tiaozhan2/26966dc52e85af40f59b4fe73d8c323a.txt 這題時, 卻發現有
    echo trim("a\nb\rc\td\ve\0f\fg h")."</br>";
    echo trim("1 10          3\n\n\n0")."</br>";
