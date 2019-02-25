<?
include "hhh.php";
$nav=nav();
$dos=dos();
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
<p style=\"color: red\">
Для сохранения данных поддерживаются только английские буквы и цифры в целях безопасности.
</p>
<form action=\"1.php\" method=\"POST\">
Введите ключ для сохранения числа.<br>
<input type=\"text\" name=\"k\" value=\"".$_GET['key']."\">
<input type=\"hidden\" name=\"i\" value=\"".$_GET['int']."\">
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