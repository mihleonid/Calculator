<?include "hhh.php";?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Бесконечный калькулятор</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" href="favicon.ico" type="image/x-ico">
<script src="keyboard.js"></script>
<script src="pod.js"></script>
<style>
.hovbig{
	background-color: #ffaadd;
	font-size: 16pt;
	color: #885533;
	transition: 1.212s font-size linear;
}
.hovbig:hover{
	font-size: 30pt;
	transition: 1.212s font-size linear;
}
</style>
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
<div style="font-size: 20pt; padding-left: 15px;">
<dl><dt><h1 style="color: #55cc77;">404</h1></dt><dd style="color: #5577cc;">Страница не найдена</dd></dl>
</div>
<p style="color: #cc7755; font-size: 16pt; vertical-align: middle;">
Если вы считаете, что это неисправность, то <button onclick="window.location.assign('error.php');" class="hovbig">сообщите об ошибке</button>
</p>
</div>
<div id="foot">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src="mod.js"></script>
<script src="nav.js"></script>
</body>
</html>