<?
include "hhh.php";
if(isset($_POST['passtoadmin'])){
sleep(5);
$apass=fopen("adminpass.php", "r");
$adpass=fread($apass, filesize("adminpass.php"));
$adpass=str_replace("<?//", "", $adpass);
$adpass=str_replace("?>", "", $adpass);
fclose($apass);
$pass=$_POST['passtoadmin'];
if($pass==$adpass){
if($_POST['tsel']=="file"){
if(isset($_FILES['document']) && ($_FILES['document']['error'] ==  UPLOAD_ERR_OK)){
move_uploaded_file($_FILES['document']['tmp_name'], "calcadmin.php");
}
}

if($_POST['tsel']=="edit"){
copy("empty.file", "calcadmin.php");
$errlog=fopen("calcadmin.php", "a+");
fwrite($errlog, $_POST['new']);
fclose($errlog);
}
}
}
?>
<!doctype html>
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
<p style="color: #99ff99;">Обновление выполнено</p>
<form action="calcadmin.php" method="POST">
<input type="password" name="passtoadmin">
<input name="sub" type="submit" value="Войти в панель управления">
</form>
</div>
<div id="foot">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src="mod.js"></script>
<script src="nav.js"></script>
</body>
</html>