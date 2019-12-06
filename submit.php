<!DOCTYPE HTML>
<html>
<head>
	<title>提交</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="1;url=/" />
</head>

</head>
<body>
	<?php
		$file="/srv/ftp/note.txt";
		$f = fopen($file, "w") or die("服务器出错！无法打开文件。");
		fwrite($f, base64_encode(rawurldecode(base64_decode($_POST["content"]))));
		fclose($f);
		echo "<h1>提交成功</h1>";
		echo "<div id=\"textd\">";
		echo $_POST["content"];
		echo "</div>"
		?>
	</body>
	<script>
		function t_decode(s){
			return decodeURIComponent(window.atob(s));
		}
		function decode_textd(){
			textd = document.getElementById("textd");
			textd.innerText = t_decode(textd.innerText);
		}
		decode_textd();
	</script>
</html>


