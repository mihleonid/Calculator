<?include "hhh.php";?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Бесконечный калькулятор</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" href="favicon.ico" type="image/x-ico">
<script src="parol.js"></script>
</head>
<body>
<div id="navpm">
<div id="ope">Показать панель навигации <img src="navdown.png"></img></div>
<div id="clo">Скрыть панель навигации <img src="navup.png"></img></div>
</div>
<div id="nav" class="pad">
<div id="f"></div>
<?echo(nav());?>
</div>
<div id="main">
<div id="header" style="font-style: italic; text-align: center; width: 100%;">
<h2 class="pad">Панель&nbsp;управления&nbsp;сайтом</h2>
</div>
<div class="section pad">
<div id="rav" style="display: none;"><?echo(dos());?></div>
<?
if(isset($_POST['passtoadmin'])){
if(isset($_POST['sub'])){
sleep(2);}
$fileerrors=false;
if(!file_exists("adminpass.php")){
echo("<p style=\"color: #ff7777\">Нет файла пароля.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$file=fopen("adminpass.php", "a+");
fwrite($file, "<?//?>");
fclose($file);
$fileerrors=true;
}
$apass=fopen("adminpass.php", "r");
$adpass=fread($apass, filesize("adminpass.php"));
if($adpass=="<?//?>"){
echo("<p style=\"color: #ff7777\">Пароль не установлен.</p>");
}
$adpass=str_replace("<?//", "", $adpass);
$adpass=str_replace("?>", "", $adpass);
fclose($apass);
$pass=$_POST['passtoadmin'];
if($pass==$adpass){
if(!file_exists("defaults.style")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Не было служебного файла.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$file=fopen("defaults.style", "a+");
fwrite($file, "2.5*136*136*255*99*204*99*102*102*255*17*119*153*0*17*238*0*0*255*255*0*0*51*255*69*19*184*67*1*68*34*153*12*255*255*255");
fclose($file);
}
$def=fopen("defaults.style", "r");
$defaults=fread($def, filesize("defaults.style"));
$default=explode("*", $defaults);
fclose($def);
//exist
if(!file_exists("pan.set")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Не было служебного файла.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$file=fopen("pan.set", "a+");
fwrite($file, "bg.png*255*255*255*14");
fclose($file);
}
if(!file_exists("poset.log")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Не было служебного файла.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$file=fopen("poset.log", "a+");
fwrite($file, " ");
fclose($file);
}
if(!file_exists("empty.file")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет русского расширения.<a target=\"_blank\" href=\"http://dan-bogolyubov.ru/site_contest2017/calculator/rus.zip\">Скачать</a>.</p><p style=\"color: #88bb88\">Заменено английским.</p>");
$file=fopen("empty.file", "a+");
fclose($file);
}
if(!file_exists("favicon.ico")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет файла иконки.<a target=\"_blank\" href=\"http://dan-bogolyubov.ru/site_contest2017/calculator/favicon.zip\">Скачать</a>.</p>");
fclose($file);
}
if((!file_exists("OpenSans-CondLight.ttf")) or (!file_exists("Pangolin-Regular.ttf")) or (!file_exists("Play-Regular.ttf"))){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет шрифтов.<a target=\"_blank\" href=\"http://dan-bogolyubov.ru/site_contest2017/calculator/font.zip\">Скачать</a>.</p>");
$file=fopen("empty.file", "a+");
fclose($file);
}
if((!file_exists("bg1.png")) or (!file_exists("bg7.png")) or (!file_exists("bg5.png")) or (!file_exists("bg2.png") or (!file_exists("bg0.png")))){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет файлов настройки фона.<a target=\"_blank\" href=\"http://dan-bogolyubov.ru/site_contest2017/calculator/bgs.zip\">Скачать</a>.</p>");
$file=fopen("empty.file", "a+");
fclose($file);
}
if(!file_exists("errors.log")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет файла лога.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
copy("empty.file", "errors.log");
$log="Ошибок не было ".date("d.m.Y")." в ".date("H:i:s").".<br>";
$errlog=fopen("errors.log", "a+");
fwrite($errlog, $log);
fclose($errlog);
}
if(!file_exists("nav.html")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет файла панели навигации.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
copy("empty.file", "nav.html");
$errlog=fopen("nav.html", "a+");
fclose($errlog);
}
if(!file_exists("dos.html")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет управления файла доской и панелью навигации.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$errlog=fopen("dos.html", "w+");
fwrite($errlog, "<?
function dos(){
	if(file_exists(\"dos.html\")){
		\$file=fopen(\"dos.html\", \"r\");
		\$con=fread(\$file, filesize(\"dos.html\"));
		fclose(\$file);
		return \$con;
	}else{
		return \"A=пr^2<br>a^2+b^2=c^2 <br>S=vt<br>0=0*n\";
	}
}
function nav(){
	if(file_exists(\"nav.html\")){
		\$file=fopen(\"nav.html\", \"r\");
		\$con=fread(\$file, filesize(\"nav.html\"));
		fclose(\$file);
		return \$con;
	}
}
?>");
fclose($errlog);
}
if(!file_exists("hhh.php")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет служебного файла файла.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$errlog=fopen("hhh.php", "a+");
fwrite($errlog, "A=пr^2<br>a^2+b^2=c^2 <br>S=vt<br>0=0*n");
fclose($errlog);
}
//auto
if(!file_exists("styles.css")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет файла стилей.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
$file=fopen("styles.css", "w+");
fwrite($file, "#but{
	position: fixed;
	top: 4px;
}
#rav{
	border: 2.5px solid #8888ff;
	float: right;
	clear: right;
	font-size: 30pt;
	color: #eeeeee;
	background-color: #63cc63;
	font-style: italic;
}
.ame{
	width:calc(100% - 10px);
	height:calc(100% - 95px); 
	border: 2.5px solid #8888ff;
}
#navpm{
	color: #efefef;
	text-align: center;
	width: 100vw;
	display: none;
	float: right;
	background-color: #6666ff;
}
#f{
	border-left: 5px solid red;
	height: 100vh;
	float: left;
}
html{
	background-image: url(\"bg.png\");
}
#nav{
	height: 100vh;
	width: 215px;
	float: right;
	overflow: auto;
	line-height: 30px;
	font-family: Navi;
	font-size: 10.5pt;
}
h3{
	padding-left: 18px;
}
h5{
	padding-left: 5px;
}
body{
    margin-top: 0px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-left: 5px;
	overflow: hidden;
}
.mindis{
	 color: rgba(0,0,0,0.75);
}
#ope{
	display: none;
}
#main{
	padding-left: 8px;
	width: calc(100% - 228px);
	height: calc(100vh - 4px);
	float: left;
	overflow: hidden;
}
.section{
	font-size: 12pt;
	height: calc(100% - 80px - 6px);
	font-family: Teacher;
	overflow: auto;
}
h2{
	color: #0011EE;
	font-style: italic;
}
#header{
	height: 50px;
	overflow: hidden;
}
.oper{
	 color: #117799;
}
#foot{
	border-top: 1px solid blue;
	width: 100%;
	height: 20px;
	margin-left: -8px;
}
.spravka  th{
	border: 1px solid indigo;
}
.spravka  td{
	border: 1px solid indigo;
}
@font-face{
	font-family: Teacher;
	src: url('Pangolin-Regular.ttf');
}
@font-face{
	font-family: Navit;
	src: url('OpenSans-CondLight.ttf');
}
@font-face{
	font-family: Navi;
	src: url('Play-Regular.ttf');
}
a{
	text-decoration: none;
}
a:hover{
	color: #13b843;
	transition: color 0.16s linear;
}
a:link{
	transition: color 1s linear;
}
a:visited{
	transition: color 1s linear;
}
a:active{
	color: #33ff45;
	transition: color 0.3s linear;
}
#mat{
	 color:#442299;
	 font-family: Navit;
	 font-weight: bold;
	 font-size: 18pt;
}
@media (max-width: 740px){
	#but{
		position: fixed;
		top: 186px;
	}
	#navpm{
		display: block;
	}
	#f{
		display: none;
	}
	#nav{
		height: 160px;
		margin-top: 5px;
		margin-bottom: 10px;
		padding-left: 10px;
		border-bottom: 5px solid red;
		border-left: 0px none red;
		width: 100%;
		clear: both;
		float: none;
		line-height: 20px;
		font-size: 14pt;
	}
	#main{
		height: calc(100% - 160px - 20px);
		float: none;
		width: calc(100% - 8px);
}
	body{
		margin-right: 0px;
		margin-bottom: 0px;
		margin-left: 0px;
		height: 100vh;
	}
	.mindis{
		display: none;
	}
	h2{
		font-size: 20pt;
	}
	.section{
		font-size: 14pt;
		height: calc(100% - 120px);
	}
}
@media (min-width: 1600px){
	.section{
		font-size: 1vw;
		height: calc(94.4vh - 60px);
		margin-top: 15px;
	}
	#mat{
		font-size: 1.5vw;
	}
}
@media (max-height: 470px){
	#foot{
		display: none;
	}
	.section{
		height: calc(100% - 53px);
	}
	#header{
		font-size: 12pt;
	}
}
@media (max-height: 470px) and (max-width: 740px){
	#but{
		position: fixed;
		top: calc(30vh + 26px);
	}
	#nav{
		height: 30vh;
	}
	#main{
		height: calc(70vh - 28px + 8px);
	}
	.section{
		height: calc(100% - 80px);
	}
}
@media (max-width: 900px){
	#rav{
		display: none;
	}
}
.pad{
	font-family: Areal;
	font-style: normal;
}");
fclose($file);
}

if(!file_exists("newadmin.php")){
$fileerrors=true;
echo("<p style=\"color: #ff7777\">Нет файла обновлений.</p><p style=\"color: #77ff77\">Успешно создан.</p>");
copy("empty.file", "newadmin.php");
$file=fopen("newadmin.php", "a+");
fwrite($file, "<?
if(isset(\$_POST['passtoadmin'])){
sleep(5);
\$apass=fopen(\"adminpass.php\", \"r\");
\$adpass=fread(\$apass, filesize(\"adminpass.php\"));
\$adpass=str_replace(\"<?//\", \"\", \$adpass);
\$adpass=str_replace(\"?>\", \"\", \$adpass);
fclose(\$apass);
\$pass=\$_POST['passtoadmin'];
if(\$pass==\$adpass){
if(\$_POST['tsel']==\"file\"){
if(isset(\$_FILES['document']) && (\$_FILES['document']['error'] ==  UPLOAD_ERR_OK)){
move_uploaded_file(\$_FILES['document']['tmp_name'], \"calcadmin.php\");
}
}

if(\$_POST['tsel']==\"edit\"){
copy(\"empty.file\", \"calcadmin.php\");
\$errlog=fopen(\"calcadmin.php\", \"a+\");
fwrite(\$errlog, \$_POST['new']);
fclose(\$errlog);
}
}
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>Бесконечный калькулятор</title>
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-ico\">
<script src=\"keyboard.js\"></script>
<script src=\"pod.js\"></script>
</head>
<body>
<div id=\"navpm\">
<div id=\"ope\">Показать панель навигации<img src=\"navdown.png\"></img></div>
<div id=\"clo\">Скрыть панель навигации<img src=\"navup.png\"></img></div>
</div>
<div id=\"nav\">
<div id=\"f\"></div>
<a href='index.html'>Главная</a><br>
<a href='help.php'>Помощь</a><br>
<a href='about.html'>О калькуляторе</a><br>
<a href='calculator.php'>Страница счёта</a><br>
<a href='matem.html'>Страница математики</a><br>
<a href='error.php'>Сообщить о ошибке</a><br>
<a href='list.php'>Вывод сохранённых чисел</a><br>
<a href='edit.php'>Изменение сохранённых чисел</a>
<br><br><a href='calcadmin.php'>Панель управления</a>
</div>
<div id=\"main\">
<div id=\"header\" style=\"font-style: italic; text-align: center; width: 100%;\">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class=\"section\">
<p style=\"color: #99ff99;\">Обновление выполнено</p>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"password\" name=\"passtoadmin\">
<input name=\"sub\" type=\"submit\" value=\"Войти в панель управления\">
</form>
</div>
<div id=\"foot\">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src=\"mod.js\"></script>
<script src=\"nav.js\"></script>
</body>
</html>");
fclose($file);
}
if($fileerrors==true){
echo("<p style=\"color: #ff7777\">Были обнаружены файловые ошибки. Рекомендуем исправить их, затем нажать на кнопку \"Создать необходимые файлы\".</p>");
}
//exist
//tsel-AddDefaultCharset: UTF-8-BOM
if($_POST['tsel']=="log"){
copy("empty.file", "errors.log");
$log="Ошибок не было ".date("d.m.Y")." в ".date("H:i:s").".<br>";
$errlog=fopen("errors.log", "a+");
fwrite($errlog, $log);
fclose($errlog);
}

if($_POST['tsel']=="scor"){
$errlog=fopen("poset.log", "w");
fwrite($errlog, " ");
fclose($errlog);
}

if($_POST['tsel']=="fon"){
$ned=$_POST['sin'].$_POST['pro'];
$cop="bg".$ned.".png";
copy($cop, "bg.png");
}

if($_POST['tsel']=="max"){
copy("empty.file", "errors.log");
$log="Ошибок не было ".date("d.m.Y")." в ".date("H:i:s").".<br>";
$errlog=fopen("errors.log", "a+");
fwrite($errlog, $log);
fclose($errlog);
$file=fopen("defaults.style", "w+");
fwrite($file, "2.5*136*136*255*99*204*99*102*102*255*17*119*153*0*17*238*0*0*255*255*0*0*51*255*69*19*184*67*1*68*34*153*12*255*255");
fclose($file);
$file=fopen("poset.log", "w+");
fwrite($file, " ");
fclose($file);
$file=fopen("pan.set", "w+");
fwrite($file, "bg.png*255*255*255*14");
fclose($file);
copy("empty.file", "newadmin.php");
$file=fopen("newadmin.php", "a+");
fwrite($file, "<?
if(isset(\$_POST['passtoadmin'])){
sleep(5);
\$apass=fopen(\"adminpass.php\", \"r\");
\$adpass=fread(\$apass, filesize(\"adminpass.php\"));
\$adpass=str_replace(\"<?//\", \"\", \$adpass);
\$adpass=str_replace(\"?>\", \"\", \$adpass);
fclose(\$apass);
\$pass=\$_POST['passtoadmin'];
if(\$pass==\$adpass){
if(\$_POST['tsel']==\"file\"){
if(isset(\$_FILES['document']) && (\$_FILES['document']['error'] ==  UPLOAD_ERR_OK)){
move_uploaded_file(\$_FILES['document']['tmp_name'], \"calcadmin.php\");
}
}

if(\$_POST['tsel']==\"edit\"){
copy(\"empty.file\", \"calcadmin.php\");
\$errlog=fopen(\"calcadmin.php\", \"a+\");
fwrite(\$errlog, \$_POST['new']);
fclose(\$errlog);
}
}
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>Бесконечный калькулятор</title>
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-ico\">
<script src=\"keyboard.js\"></script>
<script src=\"pod.js\"></script>
</head>
<body>
<div id=\"navpm\">
<div id=\"ope\">Показать панель навигации<img src=\"navdown.png\"></img></div>
<div id=\"clo\">Скрыть панель навигации<img src=\"navup.png\"></img></div>
</div>
<div id=\"nav\">
<div id=\"f\"></div>
<a href='index.html'>Главная</a><br>
<a href='help.php'>Помощь</a><br>
<a href='about.html'>О калькуляторе</a><br>
<a href='calculator.php'>Страница счёта</a><br>
<a href='matem.html'>Страница математики</a><br>
<a href='error.php'>Сообщить о ошибке</a><br>
<a href='list.php'>Вывод сохранённых чисел</a><br>
<a href='edit.php'>Изменение сохранённых чисел</a>
<br><br><a href='calcadmin.php'>Панель управления</a>
</div>
<div id=\"main\">
<div id=\"header\" style=\"font-style: italic; text-align: center; width: 100%;\">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class=\"section\">
<p style=\"color: #99ff99;\">Обновление выполнено</p>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"password\" name=\"passtoadmin\">
<input name=\"sub\" type=\"submit\" value=\"Войти в панель управления\">
</form>
</div>
<div id=\"foot\">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src=\"mod.js\"></script>
<script src=\"nav.js\"></script>
</body>
</html>");
fclose($file);
$file=fopen("parol.js", "w+");
fwrite($file, "function parol(){
	document.getElementById(\"pas\").innerHTML=document.getElementById(\"pass\").value;
	document.getElementById(\"passo\").style.display=\"none\";
	document.getElementById(\"passs\").style.display=\"\";
}
function parols(){
	document.getElementById(\"pas\").innerHTML=\"\";
	document.getElementById(\"passo\").style.display=\"\";
	document.getElementById(\"passs\").style.display=\"none\";
}
function ravo(){
	document.getElementById(\"rav\").style.display=\"\";
	document.getElementById(\"ravo\").style.display=\"none\";
	document.getElementById(\"ravs\").style.display=\"\";
}
function ravs(){
	document.getElementById(\"rav\").style.display=\"none\";
	document.getElementById(\"ravo\").style.display=\"\";
	document.getElementById(\"ravs\").style.display=\"none\";
}
function edito(){
	document.getElementById(\"editf\").style.display=\"\";
	document.getElementById(\"edito\").style.display=\"none\";
	document.getElementById(\"edits\").style.display=\"\";
}
function edits(){
	document.getElementById(\"editf\").style.display=\"none\";
	document.getElementById(\"edito\").style.display=\"\";
	document.getElementById(\"edits\").style.display=\"none\";
}
function proso(){
	document.getElementById(\"prosf\").style.display=\"\";
	document.getElementById(\"proso\").style.display=\"none\";
	document.getElementById(\"pross\").style.display=\"\";
}
function pross(){
	document.getElementById(\"prosf\").style.display=\"none\";
	document.getElementById(\"proso\").style.display=\"\";
	document.getElementById(\"pross\").style.display=\"none\";
}
function aedito(){
	document.getElementById(\"aeditf\").style.display=\"\";
	document.getElementById(\"aedito\").style.display=\"none\";
	document.getElementById(\"aedits\").style.display=\"\";
}
function aedits(){
	document.getElementById(\"aeditf\").style.display=\"none\";
	document.getElementById(\"aedito\").style.display=\"\";
	document.getElementById(\"aedits\").style.display=\"none\";
}");
fclose($file);
copy("empty.file", "mod.js");
$file=fopen("mod.js", "a+");
fwrite($file, "if(!window.navigator.cookieEnabled){
document.getElementById(\"nav\").innerHTML=\"<div id=\\\"f\\\"></div><a href='index.html'>Главная</a><br><a href='help.php'>Помощь</a><br><a href='about.html'>О калькуляторе</a><br><a href='matem.html'>Страница математики</a><br><a href='calculator.php'>Страница счёта</a><br><a href='error.php'>Сообщить о ошибке</a>\";
}");
fclose($file);
$file=fopen("nav.js", "w+");
fwrite($file, "function fmove(evt){
if(cu){
document.getElementById(\"nav\").style.width=\"calc(100vw - \" + evt.pageX + \"px - 2.5px)\";
document.getElementById(\"main\").style.width=\"calc(\" + evt.pageX + \"px - 21.5px)\";
}
}
var cu = false;
function noc(){
cu=false;
}
function curss(){
cu=true;
}
function curdrag(){
document.body.style.cursor=\"ew-resize\";
}
function curmain(){
document.body.style.cursor=\"auto\";
}
function ffclose(){
document.getElementById(\"nav\").style.display=\"none\";
document.getElementById(\"ope\").style.display=\"block\";
document.getElementById(\"clo\").style.display=\"none\";
document.getElementById(\"main\").style.width=\"calc(100vw - 8px)\";
document.getElementById(\"main\").style.height=\"calc(100vh - 20px)\";
}
function ffopen(){
document.getElementById(\"nav\").style.display=\"block\";
document.getElementById(\"clo\").style.display=\"block\";
document.getElementById(\"ope\").style.display=\"none\";
document.getElementById(\"main\").style.width=\"\";
document.getElementById(\"main\").style.height=\"\";
}
document.body.addEventListener(\"mousemove\", fmove, false);
document.getElementById(\"f\").addEventListener(\"mouseup\", noc, false);
document.getElementById(\"f\").addEventListener(\"mousedown\", curss, false);
document.getElementById(\"f\").addEventListener(\"mouseover\", curdrag, false);
document.getElementById(\"f\").addEventListener(\"mouseout\", curmain, false);
document.getElementById(\"ope\").addEventListener(\"mousedown\", ffopen, false);
document.getElementById(\"clo\").addEventListener(\"mousedown\", ffclose, false);
/*if(document.navigator.width < 740){
document.getElementById(\"nav\").style.width=\"\";
document.getElementById(\"main\").style.width=\"\";
}*/");
fclose($file);
$file=fopen("styles.css", "w+");
fwrite($file, "#but{
	position: fixed;
	top: 4px;
}
#rav{
	border: 2.5px solid #8888ff;
	float: right;
	clear: right;
	font-size: 30pt;
	color: #eeeeee;
	background-color: #63cc63;
	font-style: italic;
}
.ame{
	width:calc(100% - 10px);
	height:calc(100% - 95px); 
	border: 2.5px solid #8888ff;
}
#navpm{
	color: #efefef;
	text-align: center;
	width: 100vw;
	display: none;
	float: right;
	background-color: #6666ff;
}
#f{
	border-left: 5px solid red;
	height: 100vh;
	float: left;
}
html{
	background-image: url(\"bg.png\");
}
#nav{
	height: 100vh;
	width: 215px;
	float: right;
	overflow: auto;
	line-height: 30px;
	font-family: Navi;
	font-size: 10.5pt;
}
h3{
	padding-left: 18px;
}
h5{
	padding-left: 5px;
}
body{
    margin-top: 0px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-left: 5px;
	overflow: hidden;
}
.mindis{
	 color: rgba(0,0,0,0.75);
}
#ope{
	display: none;
}
#main{
	padding-left: 8px;
	width: calc(100% - 228px);
	height: calc(100vh - 4px);
	float: left;
	overflow: hidden;
}
.section{
	font-size: 12pt;
	height: calc(100% - 80px - 6px);
	font-family: Teacher;
	overflow: auto;
}
h2{
	color: #0011EE;
	font-style: italic;
}
#header{
	height: 50px;
	overflow: hidden;
}
.oper{
	 color: #117799;
}
#foot{
	border-top: 1px solid blue;
	width: 100%;
	height: 20px;
	margin-left: -8px;
}
.spravka  th{
	border: 1px solid indigo;
}
.spravka  td{
	border: 1px solid indigo;
}
@font-face{
	font-family: Teacher;
	src: url('Pangolin-Regular.ttf');
}
@font-face{
	font-family: Navit;
	src: url('OpenSans-CondLight.ttf');
}
@font-face{
	font-family: Navi;
	src: url('Play-Regular.ttf');
}
a{
	text-decoration: none;
}
a:hover{
	color: #13b843;
	transition: color 0.16s linear;
}
a:link{
	transition: color 1s linear;
}
a:visited{
	transition: color 1s linear;
}
a:active{
	color: #33ff45;
	transition: color 0.3s linear;
}
#mat{
	 color:#442299;
	 font-family: Navit;
	 font-weight: bold;
	 font-size: 18pt;
}
@media (max-width: 740px){
	#but{
		position: fixed;
		top: 186px;
	}
	#navpm{
		display: block;
	}
	#f{
		display: none;
	}
	#nav{
		height: 160px;
		margin-top: 5px;
		margin-bottom: 10px;
		padding-left: 10px;
		border-bottom: 5px solid red;
		border-left: 0px none red;
		width: 100%;
		clear: both;
		float: none;
		line-height: 20px;
		font-size: 14pt;
	}
	#main{
		height: calc(100% - 160px - 20px);
		float: none;
		width: calc(100% - 8px);
}
	body{
		margin-right: 0px;
		margin-bottom: 0px;
		margin-left: 0px;
		height: 100vh;
	}
	.mindis{
		display: none;
	}
	h2{
		font-size: 20pt;
	}
	.section{
		font-size: 14pt;
		height: calc(100% - 120px);
	}
}
@media (min-width: 1600px){
	.section{
		font-size: 1vw;
		height: calc(94.4vh - 60px);
		margin-top: 15px;
	}
	#mat{
		font-size: 1.5vw;
	}
}
@media (max-height: 470px){
	#foot{
		display: none;
	}
	.section{
		height: calc(100% - 53px);
	}
	#header{
		font-size: 12pt;
	}
}
@media (max-height: 470px) and (max-width: 740px){
	#but{
		position: fixed;
		top: calc(30vh + 26px);
	}
	#nav{
		height: 30vh;
	}
	#main{
		height: calc(70vh - 28px + 8px);
	}
	.section{
		height: calc(100% - 80px);
	}
}
@media (max-width: 900px){
	#rav{
		display: none;
	}
}
.pad{
	font-family: Areal;
	font-style: normal;
}");
fclose($file);
}

if($_POST['tsel']=="pan"){
$set=fopen("pan.set", "w+");

if($_POST['riofram']!=""){
$riofram=$_POST['riofram'];
}else{
$riofram="255";}

if($_POST['giofram']!=""){
$giofram=$_POST['giofram'];
}else{
$giofram="255";}

if($_POST['biofram']!=""){
$biofram=$_POST['biofram'];
}else{
$biofram="255";}

if($_POST['fsh']!=""){
$fsh=$_POST['fsh'];
}else{
$fsh="14";}

$settin=array($_POST['back'], $riofram, $giofram, $biofram, $fsh);
$settings=implode("*", $settin);
fwrite($set, $settings);
fclose($set);
}
$set=fopen("pan.set", "r");
$setti=fread($set, filesize("pan.set"));
$sett=explode("*", $setti);
fclose($set);
echo("<style>
html{
	background-color: rgb(".$sett[1].", ".$sett[2].", ".$sett[3].");
	background-image: ".$sett[0].";
}
.section{
	font-size: ".$sett[4]."pt;
}
</style>");
switch($sett[0]){
case "bg.png":
$setd[0]="selected";
$setd[1]="";
break;
case "none":
$setd[1]="selected";
$setd[0]="";
break;
}

if($_POST['tsel']=="edit"){
copy("empty.file", $_POST['openo']);
$errlog=fopen($_POST['openo'], "a+");
fwrite($errlog, $_POST['new']);
fclose($errlog);
}

if($_POST['tsel']=="edito"){
$errlog=fopen($_POST['openo'], "w+");
fwrite($errlog, $_POST['new']);
fclose($errlog);
}

if($_POST['tsel']=="copy"){
if(file_exists($_POST['openo'])){
copy($_POST['openo'], $_POST['openn']);
}else{
echo("<p style=\"color: #ffbbbb;\">Файла нет.</p>");
}
}

if($_POST['tsel']=="file"){
if(isset($_FILES['document']) && ($_FILES['document']['error'] ==  UPLOAD_ERR_OK)){
if($_POST['openn']==""){
$file=basename($_FILES['document']['name']);
}else{
$file=$_POST['openn'];
}
if(move_uploaded_file($_FILES['document']['tmp_name'], $file)){
echo("<p style=\"color: #aaffaa\">Отправка прошла успешно</p>");
}else{
echo("<p style=\"color: #ffbbbb\">Отправка прошла успешно, но файл не перемещён.</p>");
}
}else{
echo("<p style=\"color: #ff9999\">Отправка не удалась</p>");
}
}

if($_POST['tsel']=="rename"){
rename($_POST['openo'], $_POST['openn']);
}

if($_POST['tsel']=="new"){
$file=fopen($_POST['openn'], "a+");
fclose($file);
}

if(($_POST['tsel']=="nav") or ($_POST['tsel']=="dos")){
copy("empty.file", $_POST['tsel'].".html");
$file=fopen($_POST['tsel'].".html", "a+");
fwrite($file, $_POST['new']);
fclose($file);
}

if($_POST['tsel']=="craut"){
copy("empty.file", $_POST['openn']);
}

if($_POST['tsel']=="page"){
copy("empty.file", $_POST['openn']);
$file=fopen($_POST['openn'], "a+");
$txt="<?include \"hhh.php\";?><!doctype html>
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
<?echo(nav());?>
</div>
<div id=\"main\">
<div id=\"header\" style=\"font-style: italic; text-align: center; width: 100%;\">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class=\"section\">
<div id=\"rav\"><?echo(dos());?></div>
".$_POST['pager']."
</div>
<div id=\"foot\">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src=\"mod.js\"></script>
<script src=\"nav.js\"></script>
</body>
</html>";
fwrite($file, $txt);
fclose($file);
}

if($_POST['tsel']=="del"){
unlink($_POST['openn']);
}

if($_POST['tsel']=="oall"){
copy("errorsb.log", "errors.log");
$log="шибок не было ".date("d.m.Y")." в ".date("H:i:s").".<br>";
$errlog=fopen("errors.log", "a+");
fwrite($errlog, $log);
fclose($errlog);

$errlog=fopen("poset.log", "w");
fwrite($errlog, " ");
fclose($errlog);
}

if($_POST['tsel']=="styleon"){
if($_POST['wofram']!=""){
$wofram=$_POST['wofram'];
}else{
$wofram="2.5";}

if($_POST['rofram']!=""){
$rofram=$_POST['rofram'];
}else{
$rofram="136";}

if($_POST['gofram']!=""){
$gofram=$_POST['gofram'];
}else{
$gofram="136";}

if($_POST['bofram']!=""){
$bofram=$_POST['bofram'];
}else{
$bofram="255";}

if($_POST['rzofram']!=""){
$rzofram=$_POST['rzofram'];
}else{
$rzofram="99";}

if($_POST['gzofram']!=""){
$gzofram=$_POST['gzofram'];
}else{
$gzofram="204";}

if($_POST['bzofram']!=""){
$bzofram=$_POST['bzofram'];
}else{
$bzofram="99";}

if($_POST['rvofram']!=""){
$rvofram=$_POST['rvofram'];
}else{
$rvofram="102";}

if($_POST['gvofram']!=""){
$gvofram=$_POST['gvofram'];
}else{
$gvofram="102";}

if($_POST['bvofram']!=""){
$bvofram=$_POST['bvofram'];
}else{
$bvofram="255";}

if($_POST['ropofram']!=""){
$ropofram=$_POST['ropofram'];
}else{
$ropofram="17";}

if($_POST['gopofram']!=""){
$gopofram=$_POST['gopofram'];
}else{
$gopofram="119";}

if($_POST['bopofram']!=""){
$bopofram=$_POST['bopofram'];
}else{
$bopofram="153";}


if($_POST['rfoofram']!=""){
$rfoofram=$_POST['rfoofram'];
}else{
$rfoofram="0";}

if($_POST['gfoofram']!=""){
$gfoofram=$_POST['gfoofram'];
}else{
$gfoofram="0";}

if($_POST['bfoofram']!=""){
$bfoofram=$_POST['bfoofram'];
}else{
$bfoofram="255";}


if($_POST['rnavofram']!=""){
$rnavofram=$_POST['rnavofram'];
}else{
$rnavofram="255";}

if($_POST['gnavofram']!=""){
$gnavofram=$_POST['gnavofram'];
}else{
$gnavofram="0";}

if($_POST['bnavofram']!=""){
$bnavofram=$_POST['bnavofram'];
}else{
$bnavofram="0";}

if($_POST['rmatofram']!=""){
$rmatofram=$_POST['rmatofram'];
}else{
$rmatofram="68";}

if($_POST['gmatofram']!=""){
$gmatofram=$_POST['gmatofram'];
}else{
$gmatofram="34";}

if($_POST['bmatofram']!=""){
$bmatofram=$_POST['bmatofram'];
}else{
$bmatofram="153";}

if($_POST['rallofram']!=""){
$rallofram=$_POST['rallofram'];
}else{
$rallofram="19";}

if($_POST['gallofram']!=""){
$gallofram=$_POST['gallofram'];
}else{
$gallofram="184";}

if($_POST['ballofram']!=""){
$ballofram=$_POST['ballofram'];
}else{
$ballofram="67";}

if($_POST['ralofram']!=""){
$ralofram=$_POST['ralofram'];
}else{
$ralofram="51";}

if($_POST['galofram']!=""){
$galofram=$_POST['galofram'];
}else{
$galofram="255";}

if($_POST['balofram']!=""){
$balofram=$_POST['balofram'];
}else{
$balofram="69";}

if($_POST['rzaofram']!=""){
$rzaofram=$_POST['rzaofram'];
}else{
$rzaofram="0";}

if($_POST['gzaofram']!=""){
$gzaofram=$_POST['gzaofram'];
}else{
$gzaofram="17";}

if($_POST['bzaofram']!=""){
$bzaofram=$_POST['bzaofram'];
}else{
$bzaofram="238";}

if($_POST['wlofram']!=""){
$wlofram=$_POST['wlofram'];
}else{
$wlofram="1";}

if($_POST['fsfs']!=""){
$fsfs=$_POST['fsfs'];
}else{
$fsfs="12";}

if($_POST['rfonofram']!=""){
$rfonofram=$_POST['rfonofram'];
}else{
$rfonofram="255";}

if($_POST['gfonofram']!=""){
$gfonofram=$_POST['gfonofram'];
}else{
$gfonofram="255";}

if($_POST['bfonofram']!=""){
$bfonofram=$_POST['bfonofram'];
}else{
$bfonofram="255";}

$wloframf=$wlofram*0.16;
$wloframs=$wlofram*0.3;

$default=array($wofram, $rofram, $gofram, $bofram, $rzofram, $gzofram, $bzofram, $rvofram, $gvofram, $bvofram, $ropofram, $gopofram, $bopofram, $rzaofram, $gzaofram, $bzaofram, $rfoofram, $gfoofram, $bfoofram, $rnavofram, $gnavofram, $bnavofram, $ralofram, $galofram, $balofram, $rallofram, $gallofram, $ballofram, $wlofram, $rmatofram, $gmatofram, $bmatofram, $fsfs, $rfonofram, $gfonofram, $bfonofram);
$defaults=implode("*", $default);

$def=fopen("defaults.style", "w");
fwrite($def, $defaults);
fclose($def);

$style="
#but{
	position: fixed;
	top: 3px;
}
#rav{
	border: ".$wofram."px solid rgb(".$rofram.", ".$gofram.", ".$bofram.");
	float: right;
	clear: right;
	font-size: 30pt;
	color: #eeeeee;
	background-color: rgb(".$rzofram.", ".$gzofram.", ".$bzofram.");
/*	background-color: #55bf66;*/
	font-style: italic;
}
.ame{
	width:calc(100% - 10px);
	height:calc(100% - 95px); 
	border: 2.5px solid #8888ff;
}
#navpm{
	color: #efefef;
	text-align: center;
	width: 100vw;
	display: none;
	float: right;
	background-color: rgb(".$rvofram.", ".$gvofram.", ".$bvofram.");
}
#f{
	border-left: 5px solid rgb(".$rnavofram.", ".$gnavofram.", ".$bnavofram.");
	height: 100vh;
	float: left;
}
html{
	background-color: rgb(".$rfonofram.", ".$gfonofram.", ".$bfonofram.");
	background-image: url(\"bg.png\");
}
#nav{
/*	border-left: 5px solid red;*/
	height: 100vh;
	width: 215px;
	float: right;
	overflow: auto;
	line-height: 30px;
	font-family: Navi;
	font-size: 10.5pt;
/*	max-width: calc(100vw - 318px);
	min-width: 150px;*/
}
h3{
	padding-left: 18px;
}
h5{
	padding-left: 5px;
}
body{
    margin-top: 0px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-left: 5px;
	overflow: hidden;
}
.mindis{
	 color: rgba(0,0,0,0.75);
}
#ope{
	display: none;
}
#main{
	padding-left: 8px;
	width: calc(100% - 228px);
	height: calc(100vh - 4px);
	float: left;
	overflow: hidden;
/*	min-width: 313px;*/
}
.section{
	font-size: ".$fsfs."pt;
	height: calc(100% - 80px - 6px);
	font-family: Teacher;
	overflow: auto;
}
h2{
	color: rgb(".$rzaofram.", ".$gzaofram.", ".$bzaofram.");
	font-style: italic;
}
#header{
	height: 50px;
	overflow: hidden;
}
.oper{
	 color: rgb(".$ropofram.", ".$gopofram.", ".$bopofram.");
}
#foot{
	border-top: 1px solid rgb(".$rfoofram.", ".$gfoofram.", ".$bfoofram.");
	width: 100%;
	height: 20px;
	margin-left: -8px;
}
.spravka  th{
	border: 1px solid indigo;
}
.spravka  td{
	border: 1px solid indigo;
}
@font-face{
	font-family: Teacher;
	src: url('Pangolin-Regular.ttf');
}
@font-face{
	font-family: Navit;
	src: url('OpenSans-CondLight.ttf');
}
@font-face{
	font-family: Navi;
	src: url('Play-Regular.ttf');
}
a{
	text-decoration: none;
}
a:hover{
	color: rgb(".$rallofram.", ".$gallofram.", ".$ballofram.");
	transition: color ".$wloframf."s linear;
}
a:link{
	transition: color ".$wlofram."s linear;
}
a:visited{
	transition: color ".$wlofram."s linear;
}
a:active{
	color: rgb(".$ralofram.", ".$galofram.", ".$balofram.");
	transition: color ".$wloframs."s linear;
}
#mat{
	 color: rgb(".$rmatofram.", ".$gmatofram.", ".$bmatofram.");
	 font-family: Navit;
	 font-weight: bold;
	 font-size: 18pt;
}
@media (max-width: 740px){
	#but{
		position: fixed;
		top: 186px;
	}
	#navpm{
		display: block;
	}
	#f{
		display: none;
	}
	#nav{
		height: 160px;
		margin-top: 5px;
		margin-bottom: 10px;
		padding-left: 10px;
		border-bottom: 5px solid rgb(".$rnavofram.", ".$gnavofram.", ".$bnavofram.");
		border-left: 0px none rgb(".$rnavofram.", ".$gnavofram.", ".$bnavofram.");
		width: 100%;
		clear: both;
		float: none;
		line-height: 20px;
		font-size: 14pt;
	}
	#main{
		height: calc(100% - 160px - 20px);
		float: none;
		width: calc(100% - 8px);
}
	body{
		margin-right: 0px;
		margin-bottom: 0px;
		margin-left: 0px;
		height: 100vh;
	}
	.mindis{
		display: none;
	}
	h2{
		font-size: 20pt;
	}
	.section{
		font-size: calc(".$fsfs."pt + 2pt);
		height: calc(100% - 120px);
	}
}
@media (min-width: 1600px){
/*	#header{
		font-size: calc((1.15vw + 1.15vh) / 2);
		height: 3.6vh;
	}*/
	.section{
		font-size: calc(1vw * ".$fsfs." / 12);
		height: calc(94.4vh - 60px);
		margin-top: 15px;
	}
	#mat{
		font-size: 1.5vw;
	}
}
@media (max-height: 470px){
	#foot{
		display: none;
	}
	.section{
		height: calc(100% - 53px);
	}
	#header{
		font-size: 12pt;
	}
}
@media (max-height: 470px) and (max-width: 740px){
	#but{
		position: fixed;
		top: calc(30vh + 26px);
	}
	#nav{
		height: 30vh;
	}
	#main{
		height: calc(70vh - 28px + 8px);/* - 5px*/
	}
	.section{
		height: calc(100% - 80px);
	}
}
@media (max-width: 900px){
	#rav{
		display: none;
	}
}
.pad{
	font-family: Areal;
	font-style: normal;
}";
$errlog=fopen("style.css", "w");
fwrite($errlog, $style);
fclose($errlog);
}

if($_POST['tsel']=="styleoff"){
copy("styles.css", "style.css");
copy("default.style", "defaults.style");
}

if($_POST['tsel']=="pass"){
if($_POST['pass']==$_POST['passt']){
$newpass=fopen("adminpass.php", "w");
$newpassw=preg_replace("@[^a-zA-Z1-90]@", "", $_POST['pass']);
$newpasswo="<?//".$newpassw."?>";
fwrite($newpass, $newpasswo);
fclose($newpass);
$adpass=$newpassw;
echo("<p style=\"color: #77ff77\">Пароль успешно изменён.</p>");
}else{
echo("<p style=\"color: #ff7777\">Пароли не совпадают</p>");
}
}
//tsel
$co=fopen("poset.log", "r");
if($co!==false){
$ct=fread($co, filesize("poset.log"));
$ct=str_replace(" ", "", $ct);
$cc=strlen($ct);
fclose($co);}else{
$cc=0;
}
$ll=fopen("errors.log", "r");
$lll=fread($ll, filesize("errors.log"));
$llll=strlen($lll);
fclose($ll);
if($llll>60){
	echo("Лог не пустой. <a href=\"viewerr.html\" target=\"_blank\">Просмотреть его</a>.");
}
$file=fopen("nav.html", "r");
$navh=fread($file, filesize("nav.html"));
fclose($file);
$file=fopen("dos.html", "r");
$dosh=fread($file, filesize("dos.html"));
fclose($file);
echo("<br>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"log\">
<input type=\"hidden\" id=\"pass\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"submit\" value=\"Очистить лог\">
</form><p>С помощью этого калькулятора считали примеров: ".$cc." шт.</p>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"scor\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"submit\" value=\"Очистить счётчик\">
</form>
<br>
Очистить всё<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"oall\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"submit\" value=\"Очистить\">
</form>
<p>Сменить пароль</p>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"pass\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Введите новый пароль<input type=\"password\" name=\"pass\" value=\"".$adpass."\"><br>
 Подтвердите пароль <input type=\"password\" name=\"passt\">
<input type=\"submit\" value=\"Сменить\">
</form><br>
Показать пароль <input type=\"button\" value=\"Показать\" onclick=\"parol()\" id=\"passo\"><input type=\"button\" value=\"Скрыть\" onclick=\"parols()\" id=\"passs\" style=\"display: none;\">
<span id=\"pas\"></span>
<br>Показать доску <input type=\"button\" value=\"Показать\" onclick=\"ravo()\" id=\"ravo\"><input type=\"button\" value=\"Скрыть\" onclick=\"ravs()\" id=\"ravs\" style=\"display: none;\">
<br><br><div id=\"but\" style=\"min-width: 500px;\">
<form action=\"calcadmin.php\" method=\"POST\" style=\"display: inline;\">
<input type=\"hidden\" name=\"tsel\" value=\"\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"submit\" value=\"Безопасная перезагрузка\" style=\"background-color: #aaffaa;\">
</form>
<form action=\"calcadmin.php\" method=\"POST\" style=\"display: inline;\">
<input type=\"submit\" value=\"Выйти из панели управления\" style=\"background-color: #ff9999;\">
</form><br></div>
<h3>Настройки стиля</h3>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"styleon\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<table>
<tr>
<td colspan=\"4\" style=\"text-align: center;\">Доска:</td>
</tr>
<tr>
<td colspan=\"3\">Ширина рамки</td><td><input type=\"text\" value=\"".$default[0]."\" style=\"width: 60px; background-color: #ffaaff;\" name=\"wofram\">px</td>
</tr>
<tr>
<td>Цвет рамки</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rofram\" value=\"".$default[1]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gofram\" value=\"".$default[2]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bofram\" value=\"".$default[3]."\"></td>
</tr>
<tr>
<td>Цвет доски</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rzofram\" value=\"".$default[4]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gzofram\" value=\"".$default[5]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bzofram\" value=\"".$default[6]."\"></td>
</tr>
<tr>
<td colspan=\"4\" style=\"text-align: center;\">Основные настройки:</td>
</tr>
<tr>
<td>Цвет строки для скрытия панели навигации</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rvofram\" value=\"".$default[7]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gvofram\" value=\"".$default[8]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bvofram\" value=\"".$default[9]."\"></td>
</tr>
<tr>
<td>Цвет строки операторов</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"ropofram\" value=\"".$default[10]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gopofram\" value=\"".$default[11]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bopofram\" value=\"".$default[12]."\"></td>
</tr>
<tr>
<td>Цвет заголовка</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rzaofram\" value=\"".$default[13]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gzaofram\" value=\"".$default[14]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bzaofram\" value=\"".$default[15]."\"></td>
</tr>
<tr>
<td>Цвет верхней границы подвала</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rfoofram\" value=\"".$default[16]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gfoofram\" value=\"".$default[17]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bfoofram\" value=\"".$default[18]."\"></td>
</tr>
<tr>
<td>Цвет линии полей</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rnavofram\" value=\"".$default[19]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gnavofram\" value=\"".$default[20]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bnavofram\" value=\"".$default[21]."\"></td>
</tr>
<tr>
<td>Цвет ссылки под нажатием</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"ralofram\" value=\"".$default[22]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"galofram\" value=\"".$default[23]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"balofram\" value=\"".$default[24]."\"></td>
</tr>
<tr>
<td>Цвет ссылки под курсором</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rallofram\" value=\"".$default[25]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gallofram\" value=\"".$default[26]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"ballofram\" value=\"".$default[27]."\"></td>
</tr>
<tr>
<td colspan=\"3\">Замедление анимации ссылки</td><td><input type=\"text\" value=\"".$default[28]."\" style=\"width: 60px; background-color: #ffaaff;\" name=\"wlofram\">x</td>
</tr>
<tr>
<td>Цвет текста на странице математики</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rmatofram\" value=\"".$default[29]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gmatofram\" value=\"".$default[30]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bmatofram\" value=\"".$default[31]."\"></td>
</tr>
<tr>
<td>Цвет фона</td><td>R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"rfonofram\" value=\"".$default[33]."\"></td><td>G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"gfonofram\" value=\"".$default[34]."\"></td><td>B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"bfonofram\" value=\"".$default[35]."\"></td>
</tr>
<tr>
<td colspan=\"3\">Размер шрифта</td><td><input type=\"text\" value=\"".$default[32]."\" style=\"width: 60px; background-color: #ffaaff;\" name=\"fsfs\">pt</td>
</tr>
<tr>
<td colspan=\"4\"><input type=\"submit\" value=\"OK\"></td>
</tr>
</table>
</form>
<br>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"styleoff\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"submit\" value=\"Сброс настроек стиля\">
</form>
<h3>Операции с файлами</h3>
<br><br>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"open\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"text\" name=\"openo\" value=\"help.php\">
<input type=\"submit\" value=\"Открыть\">
</form>");
if($_POST['tsel']=="open" or $_POST['tsel']=="edit"){
echo("<br>Изменение
<form action=\"calcadmin.php\" method=\"POST\" id=\"editf\">
<select name=\"tsel\">
<option value=\"edit\">Как русский файл</option>
<option value=\"edito\">Как простой файл</option>
</select><br>
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"hidden\" name=\"openo\" value=\"".$_POST['openo']."\">
<TEXTAREA name=\"new\" style=\"width: calc(100% - 10px); height: calc(100vh - 150px);\">");
$file=fopen($_POST['openo'], "r");
echo(fread($file, filesize($_POST['openo'])));
fclose($file);
echo("</TEXTAREA>
<br><input type=\"submit\" value=\"Изменить\">
</form><input type=\"button\" value=\"Свернуть\" onclick=\"edits()\" id=\"edits\"><input type=\"button\" value=\"Развернуть\" onclick=\"edito()\" id=\"edito\" style=\"display: none;\">");
}
echo("<br>Копирование
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"copy\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Из<input type=\"text\" name=\"openo\" value=\"".$_POST['openo']."\">
<br>В<input type=\"text\" name=\"openn\" value=\"".$_POST['openn']."\">
<br><input type=\"submit\" value=\"Копировать\">
</form><br>Переименование/перемещение
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"rename\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Из<input type=\"text\" name=\"openo\" value=\"".$_POST['openo']."\">
<br>В<input type=\"text\" name=\"openn\" value=\"".$_POST['openn']."\">
<br><input type=\"submit\" value=\"Переименовать/переместить\">
</form><br>Создание простого файла
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"new\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Имя файла<input type=\"text\" name=\"openn\">
<input type=\"submit\" value=\"Создать\">
</form><br>Создание русского файла
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"craut\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Имя файла<input type=\"text\" name=\"openn\">
<input type=\"submit\" value=\"Создать\">
</form><br>Создание страници
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"page\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Имя файла<input type=\"text\" name=\"openn\" value=\"page.php\"><br>
<TEXTAREA name=\"pager\" style=\"width: 500px; height: 350px;\">Содержимое страницы</TEXTAREA>
<br><input type=\"submit\" value=\"Создать\">
</form><br>Удаление
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"del\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Имя файла<input type=\"text\" name=\"openn\" value=\"".$_POST['openo']."\">
<input type=\"submit\" value=\"Удалить\">
</form><br>Подгрузка
<form action=\"calcadmin.php\" method=\"POST\" enctype=\"multipart/form-data\">
<input type=\"hidden\" name=\"tsel\" value=\"file\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"file\" name=\"document\"><br>
Имя файла на сервере<input type=\"text\" name=\"openn\" value=\"".$_POST['openo']."\">
<input type=\"submit\" value=\"Загрузить\">
</form><br>Изменение панели навигации
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"nav\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<textarea name=\"new\" style=\"width: 440px; height: 170px;\">".$navh."</textarea><br>
<input type=\"submit\" value=\"Изменить\">
</form><br>Изменение доски
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"dos\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<textarea name=\"new\" style=\"width: 440px; height: 170px;\">".$dosh."</textarea><br>
<input type=\"submit\" value=\"Изменить\">
</form><br>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"max\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"submit\" style=\"background-color: #ffbbff;\" value=\"Создать необходимые файлы\">
</form><br>
<h3>Настройки фона</h3>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"fon\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Непрозрачность синего:
<select name=\"sin\" style=\"background-color: rgba(170, 170, 255, 0.25);\">
<option value=\"1\">100%</option>
<option value=\"7\">75%</option>
<option value=\"5\">50%</option>
<option value=\"2\">25%</option>
<option value=\"0\">0%</option>
<br>
<input type=\"submit\" value=\"ОК\">
</form>
<br>
<h3>Настройки панели управления</h3>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"hidden\" name=\"tsel\" value=\"pan\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
Клетка на странице:
<select name=\"back\" style=\"background-color: #ffaaff;\">
<option value=\"bg.png\"".$setd[0].">Есть</option>
<option value=\"none\"".$setd[1].">Нет</option>
</select><br>
Цвет фона R:<input type=\"text\" style=\"width: 50px; background-color: #ffaaaa;\" name=\"riofram\" value=\"".$sett[1]."\"> G:<input type=\"text\" style=\"width: 50px; background-color: #aaffaa;\" name=\"giofram\" value=\"".$sett[2]."\"> B:<input type=\"text\" style=\"width: 50px; background-color: #aaaaff;\" name=\"biofram\" value=\"".$sett[3]."\">
<br>
Размер шрифта <input type=\"text\" style=\"width: 50px; background-color: #ffaaff;\" name=\"fsh\" value=\"".$sett[4]."\">pt
<br>
<input type=\"submit\" value=\"ОК\">
</form>
<br>
<h3>Обновление панели</h3>
<b>Текст</b>
<form action=\"newadmin.php\" method=\"POST\" id=\"aeditf\">
<input type=\"hidden\" name=\"tsel\" value=\"edit\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"hidden\" name=\"openo\" value=\"".$_POST['openo']."\">
<TEXTAREA name=\"new\" style=\"width: calc(100% - 160px); height: calc(100vh - 350px);\"></TEXTAREA>
<br><input type=\"submit\" value=\"Изменить\">
</form><input type=\"button\" value=\"Свернуть\" onclick=\"aedits()\" id=\"aedits\"><input type=\"button\" value=\"Развернуть\" onclick=\"aedito()\" id=\"aedito\" style=\"display: none;\">
<br><br><b>Файл</b>
<form action=\"newadmin.php\" method=\"POST\" enctype=\"multipart/form-data\">
<input type=\"hidden\" name=\"tsel\" value=\"file\">
<input type=\"hidden\" name=\"passtoadmin\" value=\"".$adpass."\">
<input type=\"file\" name=\"document\"><br>
<input type=\"submit\" value=\"Загрузить\">
</form>
<h3>Просмотр страниц</h3>
<input type=\"button\" value=\"Показать\" onclick=\"proso()\" id=\"proso\"><input type=\"button\" value=\"Скрыть\" onclick=\"pross()\" id=\"pross\" style=\"display: none;\">
<div id=\"prosf\" style=\"height: calc(100vh - 95px); display: none;\">
Широкий экран<br>
<iframe class=\"ame\" src=\"index.html\"></iframe><br>
Узкий экран<br>
<iframe style=\"height: 300px; width: 400px;\" src=\"index.html\"></iframe></div>");
}else{
sleep(5);
echo("<p style=\"color: #ff3333;\">Пароль неверен!</p>
<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"password\" name=\"passtoadmin\">
<input name=\"sub\" type=\"submit\" value=\"Войти в панель управления\">
</form>");
}
}else{
echo("<form action=\"calcadmin.php\" method=\"POST\">
<input type=\"password\" name=\"passtoadmin\">
<input name=\"sub\" type=\"submit\" value=\"Войти в панель управления\">
</form><p>Внимание!!! Пароль от этой страницы - pass. Здесь он указан только для демонстрации этого сайта. По этим причинам ссылка на эту страницу включена в панель навигации.</p>");
}
?>
</div>
<div id="foot" class="pad">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src="mod.js"></script>
<script src="nav.js"></script>
</body>
</html>