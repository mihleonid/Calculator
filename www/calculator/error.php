﻿<?
include "hhh.php";
$nav=nav();
$dos=dos();
if(isset($_POST['dis'])){
$err=str_replace("<", "(", $_POST['dis']);
$err=str_replace(">", ")", $err);
$page=$_POST['page'];
$type=$_POST['type'];
if(strlen($page)<2){$page="0".$page;}
if(strlen($type)<2){$type="0".$type;}
$cod=$page.$type;
$err=".<br>Описание ошибки: ".$err."<br>";
$errstr="Ошибка: <br>Код ошибки:".$cod.$err;
$errlog=fopen("errors.log", "a+");
fwrite($errlog, $errstr);
fclose($errlog);
$str="<p style=\"color: #11ee11\">Сообщение отправленно успешно!Спасибо за помощь.</p>";}
echo("
<!doctype html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>Бесконечный калькулятор</title>
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-ico\">
</head>
<body>
<div id=\"navpm\">
<div id=\"ope\">Показать панель навигации <img src=\"navdown.png\"></img></div>
<div id=\"clo\">Скрыть панель навигации <img src=\"navup.png\"></img></div>
</div>
<div id=\"nav\">
<div id=\"f\"></div>
".$nav."
</div>
<div id=\"main\">
<div id=\"header\" style=\"font-style: italic; text-align: center; width: 100%;\">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class=\"section\">
<div id=\"rav\">".$dos."</div>".$str."
<form action=\"error.php\" method=\"POST\">
Выберите страницу с ошибкой
<select name=\"page\">
<option value=\"0\">Главная</option>
<option value=\"1\">Страница счёта</option>
<option value=\"2\">Страница вывода сохранённых чисел</option>
<option value=\"3\">Страница математики</option>
<option value=\"4\">Страница помощи</option>
<option value=\"5\">О калькуляторе</option>
<option value=\"6\">Страница просмотра ошибок</option>
<option value=\"7\">Страница изменения сохранённых чисел</option>
<option value=\"8\">Эта страница</option>
<option value=\"9\">Страница вывода ошибок</option>
<option value=\"10\">Все страницы</option>
</select><br>
Выберите вид ошибки
<select name=\"type\">
<option value=\"0\">Опечатка</option>
<option value=\"1\">Совет на улучшение функционала</option>
<option value=\"2\">Другой совет</option>
<option value=\"3\">Ошибка разметки</option>
<option value=\"4\">Отсутствие ссылки</option>
<option value=\"5\">Нерабочая ссылка</option>
<option value=\"6\">Ошибка счёта</option>
<option value=\"7\">Ошибка кодировки</option>
<option value=\"8\">Системная ошибка</option>
<option value=\"9\">Другой</option>
</select><br>
<textarea name=\"dis\" style=\"max-width: 200px; max-width: 300px; height: 100px; max-height: 150px;\" title=\"Опишите ошибку...\" placeholder=\"Опишите ошибку...\"></textarea>
<br><input type=\"submit\" value=\"Сообщить\">
</form>
<br>
<p>Если вы хотите просмотреть сообщения других пользователей, то вы можите это сделать <a href=\"viewerr.php\" target=\"_blank\">тут</a></p>
</div>
<div id=\"foot\">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src=\"mod.js\"></script>
<script src=\"nav.js\"></script>
</body>
</html>");
?>