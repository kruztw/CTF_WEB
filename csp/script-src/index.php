<?php
$nonce=123;
?>

<html>

<head>
    <meta http-equiv="Content-Security-Policy" content="script-src 'nonce-<?=$nonce;?>' 'strict-dynamic';">
</head>

<body>
    <?php echo $_POST['content'];?>
    
    <!-- nonce-123 => 所有 script 都要加上 nonce="123" 方能執行 -->
    <script nonce="<?=$nonce;?>">alert('It works !');</script>
    <script nonce="123">alert('It works again !');</script>
    <script>alert('It doesn\'t work.');</script>
    
    <!-- strict-dynamic 允許在 nonce 正確的情況下, 用以下方法引入任意 js 並執行 -->
    <script nonce="123">
        var s = document.createElement('script');
        s.src = "alert.js";
        document.body.appendChild(s);
    </script>
</body>


</html>
