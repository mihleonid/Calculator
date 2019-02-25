<?
include "hhh.php";
$nav=nav();
$dos=dos();
$clist=$_COOKIE['<list>'];
$list=explode("<key>", $clist);
$list=array_unique($list);
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
<div id=\"rav\">".$dos."</div>");
if(isset($_COOKIE['<list>'])){
	echo("<ol>");
foreach($list as $cook){
	if(isset($_COOKIE[$cook])){
		echo("<li>".$cook.": ".$_COOKIE[$cook]."</li>");
	}else{
		echo("<li>".$cook.": Данные с таким ключом повреждены.</li>");
	}
	echo("
	<form action=\"del.php\" method=\"POST\">
	<input type=\"hidden\" value=\"".$cook."\" name=\"c\">
	<input type=\"submit\" value=\"Удалить\"></form>
	<form action=\"edit.php\" method=\"GET\">
	<input type=\"hidden\" value=\"".$cook."\" name=\"k\">
	<input type=\"hidden\" value=\"".$_COOKIE[$cook]."\" name=\"i\">
	<input type=\"submit\" value=\"Изменить\"></form>");
}
echo("</ol>");
}else{
	echo("<p style=\"color: #00FF00;
font-size: 20pt;\">Ничего не сохранено!</p><br>
<form action=\"edit.php\" method=\"GET\">
<input type=\"hidden\" value=\"\" name=\"k\">
<input type=\"hidden\" value=\"\" name=\"i\">
<input type=\"submit\" value=\"Добавить данные\">
<br>
<input type=\"button\" value=\"Считать\" onclick=\"window.location.assign('index.php');\"></form>");
}
echo("
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