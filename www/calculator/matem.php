<?include "hhh.php";?>
<!doctype html>
<html>
<head>
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
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class="section" id="mat">
<h3>Математические законы</h3>
<h5>Условия:</h5>
<p>
<ul>
<li>t &mdash; простое число.</li>
<li>a, b, c &mdash; натуральные числа.</li>
</ul>
</p>
<h5>Законы:</h5>
<ul>
<li>a+b=b+a.</li>
<li>a*b=b*a.</li>
<li>Если a*a делится на t,
то a делится на t и a*a делится на t*t.</li>
<li>a/b=c, c*b=a, a/c=b.</li>
<li>a*5=10*a/2.</li>
<li>a*10=a приписать 0.</li>
<li>Если сумма цифр в числе a делится на 3, то a делится на 3.</li>
<li>Если сумма цифр в числе a делится на 9, то a делится на 9.</li>
</ul>
<div>Некоторые равенства:<ul><li>A=пr^2<li>a^2+b^2=c^2 <li>S=vt<li>0=0*n</ul></div>
</div>
<div id="foot">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src="mod.js"></script>
<script src="view.js"></script>
<script src="nav.js"></script>
</body>
</html>