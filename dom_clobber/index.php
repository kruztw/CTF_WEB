<!--
php -S localhost:8888
http://localhost:8888/?theme="><h1>clobber</h1>
-->
<?php
$theme = $_GET['theme'] ?? 'dark';
?>

<!doctype html>
<html>
  <body>
      <nav class="navbar-<?= $theme ?>"> DOM  </nav>
  </body>
</html>
