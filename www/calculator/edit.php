<?
include "hhh.php";
$nav=nav();
$dos=dos();
if(isset($_GET['key'])){
	$key=$_GET['key'];
}else{
	$key="";
}
if(isset($_GET['int'])){
	$int=$_GET['int'];
	$str="<p style=\"color: red;\">Возможно, Вы ввели не верное число для прошлого сохранения или в результате действия получили ошибку.<br>
	Пожалуйста, измените данные.</p>";
}else{
	$int="";
	$str="";
}
if(isset($_GET['k'])){
	$key=$_GET['k'];
}
if(isset($_GET['i'])){
	$int=$_GET['i'];
}
echo("<!doctype html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>Бесконечный калькулятор</title>
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-ico\">
</head>
<body>
<div id=\"navpm\">
<div id=\"ope\">Показать панель навигации<img src=\"navdown.png\"></img></div>
<div id=\"clo\">Скрыть панель навигации<img src=\"navup.png\"></img></div>
</div>
<div id=\"nav\">
<div id=\"f\"></div>
".$nav."
</div>
<div id=\"main\">
<div id=\"header\" style=\"font-style: italic; text-align: center; width: 100%;\">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class=\"section\" id=\"cook\">
<div id=\"rav\">".$dos."</div>
<p style=\"color: blue\">
Здесь вы можете сохранять и изменять существующую информацию.
</p>".$str."<form action=\"1.php\" method=\"POST\">
Введите ключ для сохранения числа и само число.<br>
Ключ:<input type=\"text\" name=\"k\" value=\"".$key."\">,<br>
Число:<input type=\"text\" name=\"i\" value=\"".$int."\"><br>
<input type=\"submit\" value=\"Сохранить\">
</form>
</div>
<div id=\"foot\">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src=\"mod.js\"></script>
<script src=\"modul.js\"></script>
<script src=\"nav.js\"></script>
</body>
</html>");
?>