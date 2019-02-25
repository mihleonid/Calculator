<?//PHP
$key=htmlentities($_POST['c']);
setcookie($key, '', 1);
$clist=$_COOKIE['<list>'];
$list=explode("<key>", $clist);
$list=array_unique($list);
unset($list[array_search($key, $list)]);
$slist=implode("<key>", $list);
setcookie('<list>', $slist);
header("Location: http://localhost/calculator/list.php");
?>