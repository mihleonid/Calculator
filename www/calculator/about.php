﻿<?include "hhh.php";?>
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
<div class="section">
<div id="rav"><?echo(dos());?></div>
<div style="font-size: 13pt;">
<p>
Этот калькулятор - проектная работа. Автор - Михайлов Леонид.<br>
<b>Калькулятор сам настраивает конфигурацию так, чтобы он мог считать <em>неограниченное время</em>, и числа могли занимать <em>любое количество места</em>.</b><br>
<em>Калькулятор может считать дробные и отрицательные числа.</em>
</p>
<h4>Описание стилей, возможностей клавиатуры и внешнего вида калькулятора:</h4>
<ol>
<li>На главной странице и на странице счёта расположена встроенная особая клавиатура.</li>
<li>На основной клавиатуре имеются кнопки:
<dl>
<dt>Кнопки цифр, "!", ":", "well", "^", "/", "*", "-", "+", "prst", "ret", ".", "[", "]", "r", "t" &mdash;</dt>
<dd>Вывод соответствующего символа(набора символов) в конце строки примера.</dd>
<dt>"10^" &mdash;</dt>
<dd>Вывод набора символов "10^" в начале строки примера.</dd>
<dt>"&#9003;" &mdash;</dt>
<dd>Стереть последний символ в строке примера.</dd>
<dt>"c" &mdash;</dt>
<dd>Очистить строку примеров.</dd>
<dt>"=" &mdash;</dt>
<dd>Сосчитать пример.</dd>
</dl>
</li>
<li>Дополнительная клавиатура позволяет брать прошлый пример, ответ или дописывать их в конец строки текущего примера.</li>
<li>Калькулятор позволяет сохранять результаты и выгружать их из памяти без копирования с помощью подобной записи "[ключ]"</li>
<li>Ссылки, над которыми находится курсор, окрашиваются в зеленоватый цвет, а нажатые ссылки окрашиваются в светло-зелёный цвет. К этим событиям привязана анимация (можно проверить методом наведения курсора на ссылку и удержанием в нажатом состоянии этой ссылки).</li>
<li>К области основного текста (этот список является частью этой области) применён нестандартный шрифт.</li>
<li>При отсутствии возможности сохранять файлы cookie из панели навигации пропадут страницы, полностью связанные с сохранением этих файлов, а также формы на сохранение чисел.</li>
<li>Страницы оформлены в виде тетрадного листа.</li>
<li>Панель навигации оформлена в виде записи на полях тетрадного листа.</li>
<li>При широком экране панель навигации располагается справа (слева получается не опрятный вид).</li>
<li>При маленькой ширине экрана панель навигации двигается вверх, на главной странице пропадают все надписи-подсказки (можно проверить, изменив ширину окна браузера).</li>
<li>При маленькой ширине экрана появляется возможность скрывать панель навигации (можно проверить, изменив ширину окна браузера).</li>
<li>При очень широком экране шрифт пропорционально увеличивается.</li>
<li>При переполнении прокручивается только область основного текста (этот список является частью этой области).</li>
<li>При маленькой ширине экрана происходит смена разметки (можно проверить, изменив ширину окна браузера).</li>
<li>При маленькой высоте экрана пропадает подвал (можно проверить, изменив высоту окна браузера).</li>
<li>При маленькой ширине и высоте страницы правильно переразмечаются, а именно подтягивается панель навигации и не нарушается красота внешнего вида (можно проверить, изменив ширину и высоту окна браузера).</li>
<li>При переполнении элементов страницы полосы прокрутки правильно обрабатываются (можно проверить, изменив ширину и/или высоты окна браузера для переполнения).</li>
<li>При разных разрешениях экрана по-разному изменяется шрифт (можно проверить, изменив ширину и/или высоту окна браузера).</li>
<li>На странице счёта есть дополнительная панель для вывода предыдущего ответа или примера в строку текущего примера.</li>
<li>Имеется дополнительная страница ошибки ввода неверного ключа для сохранения числа, предусмотрен вывод сообщения об ошибке неверного числа.</li>
<li>При счёте у калькулятора срабатывает защита от случайного нажатия на любой символ, кроме символа действий (они пропадают).</li>
<li>Калькулятор умеет сообщать об ошибках и, если вы хотите посмотреть возникшее у пользователей ошибки и их комментарии, то это можно сделать <a href="viewerr.php" target="_blank">тут</a>.</li>
<li>Минимальные размеры:
<ul>
<li>Минимальная удобная ширина для компьютеров - 320px, для телефонов - 280px.</li>
<li>Минимальная ширина для компьютеров - 270px, для телефонов - 255px.</li>
<li>Минимальная удобная высота для компьютеров - 185px, для телефонов - 175px.</li>
<li>Минимальная высота - 148px.</li>
<li>Некоторые мобильные устройства могут обеспечить возможность правильно обрабатываться на более маленьких экранах.</li>
</ul>
</li>
</ol>
<h3>Инструкция по сохранению результата (с примером).</h3>
<ol>
<li>Сосчитать первый пример (в нашем случае &mdash; "5/2").</li>
<li>Получить результат (в нашем случае &mdash; "2.5"), ввести ключ для сохранения числа (в нашем случае &mdash; "key").</li>
<li>Нажать на кнопку "сохранить".</li>
<li>Мы попадаем на главную страницу сайта.</li>
<li>Сосчитать второй пример (в нашем случае &mdash; "8+2.5" вместо этой записи надо использовать такую: "8+[key]").</li>
<li>Получить результат (в нашем случае &mdash; "10.5").</li>
</ol>
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