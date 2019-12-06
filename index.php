<!DOCTYPE HTML>
<html>
<head>
	<title>fkxxyz</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<style type="text/css">
		form {
			width:90%;
		}
		textarea {
			width:90%;
			overflow:auto;
			word-break:break-all;
		}
		input {
			width:120px;
			height:60px;
			font-size:20px;
		}
	</style>
</head>
<body>
	<form class="form" name="editform" method="post" action="submit.php">
	<input type="submit" onclick="encode_texta()" value="提交" />
	<input type="button" onclick="clear_texta()" value="清空">
	<p>
		<textarea id="texta" rows="20" name="content"><?php
			$file="/srv/ftp/note.txt";
			echo base64_encode(rawurlencode(base64_decode(file_get_contents($file))));
		?></textarea>
	</p>
	</form>
	<script>
		function t_encode(s){
			return window.btoa(encodeURIComponent(s));
		}
		function t_decode(s){
			return decodeURIComponent(window.atob(s));
		}
		function clear_texta(){
			document.getElementById("texta").value = "";
		}
		function encode_texta(){
			texta = document.getElementById("texta");
			texta.value = t_encode(texta.value);
		}
		function decode_texta(){
			texta = document.getElementById("texta");
			texta.value = t_decode(texta.value);
		}
		decode_texta();
	</script>
</body>
</html>


