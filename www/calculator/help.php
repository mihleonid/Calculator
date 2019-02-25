<?include "hhh.php";?><!doctype html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Бесконечный калькулятор</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" href="favicon.ico" type="image/x-ico">
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
<h2>Бесконечный калькулятор</h2>
</div>
<div class="section">
<div id="rav">
<?echo(dos());?>
</div>
<p style="color:#663322;">Поддерживаются операторы:<span class="oper">"+", "-", "*","step","!", ":","10step", "/", "^", "10^", "well", "ret", "/r", "*r", "/t", "prst"</span>.</p>
<p style="color:#991111;">Строка должна состоять из одного действия.</p>
<?
include "spravka.html";
?>
</div>
<div id="foot">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src="mod.js"></script>
<script src="nav.js"></script>
</body>
</html>