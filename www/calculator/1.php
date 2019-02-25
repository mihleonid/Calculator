<?//PHP
$int=$_POST['i'];
$key=$_POST['k'];
if(preg_match("@[^qwertyuiopasdfghjklzxcvbnm1234567890]@", $key)){
header("Location: http://localhost/calculator/errcook.php?key=".$key."&int=".$int);
exit;
}
if(preg_match("@[^1234567890\-\.]@", $int)){
header("Location: http://localhost/calculator/edit.php?key=".$key."&int=".$int);
exit;
}
setcookie($key, $int);
if(isset($_COOKIE['<list>'])){
	setcookie('<list>', $_COOKIE['<list>']."<key>".$key);
}else{
	setcookie('<list>', $key);
}
header("Location: http://localhost/calculator/index.php");
?>