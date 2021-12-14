#https://hackmd.io/@foxo-tw/Sy57iBSsH?print-pdf#p9
<?php
    if (preg_match('/.*flag.*/is', $_POST['x']))
	die('Nope');
    if (substr($_POST['x'], 0, 4) === 'flag')
	die('You win');
?>
