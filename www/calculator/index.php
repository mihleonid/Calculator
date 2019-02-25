<?include "hhh.php";?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Бесконечный калькулятор</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" href="favicon.ico" type="image/x-ico">
<script src="keyboard.js"></script>
<script src="pod.js"></script>
</head>
<body>
<div id="navpm">
<div id="ope">Показать панель навигации<img src="navdown.png"></img></div>
<div id="clo">Скрыть панель навигации<img src="navup.png"></img></div>
</div>
<div id="nav">
<div id="f"></div>
<?echo(nav());?>
</div>
<div id="main">
<div id="header" style="font-style: italic; text-align: center; width: 100%;">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class="section">
<div id="rav"><?echo(dos());?></div>
<form method="POST" action="calculator.php">
<table>
<tr>
<td colspan="7">
<input type="text" name="ac" style="width: 100%;" id="v">
</td>
</tr>

<?
include "table.html";?>
</form>
<div class="mindis">
<p>Поддерживаются операторы: "+", "-", "*", "step", "!", ":", "10step", "/", "^", "10^", "well", "ret", "/r", "*r", "/t", "prst", "tprst", "rprst", "/rr", "/tt".</p>
<p>Строка должна состоять из одного действия.</p>
<p id="buts">
<input type="button" value="Скрыть подсказку" onclick="pods()" style="font-family: Teacher;">
</p>
<?
include "spravka.html";
?>
</div>
</div>
<div id="foot">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src="mod.js"></script>
<script src="nav.js"></script>
</body>
</html>