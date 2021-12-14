<?php
// demo: 用 is_dir + phar 觸發反序列化
// 事實上所有檔案函式均可使用: https://www.mdeditor.tw/pl/2DxA/zh-tw
// 基本上要搭配檔案上傳, 但為了簡單, 所以直接用 a.phar

class Cat {
	function __wakeup() {
		die("You Win !!");
	}
}

if (is_dir($_GET['dir'])) {
	die("is dir");
}

//?dir=phar://a.phar
?>
