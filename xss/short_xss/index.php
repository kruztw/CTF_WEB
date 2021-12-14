<!--
https://hackmd.io/@terjanq/justCTF2020-writeups#Baby-CSP-web-6-solves-406-points
-->

<?php

if(isset($_GET['user'])) {
    echo <<<EOT
        <h1> Hello {$_GET['user']}</h1>
EOT;
}
