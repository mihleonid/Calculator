<?
include "hhh.php";
ini_set("max_execution_time", -1);
ini_set("memory_limit", -1);
ini_set("post_max_size", -1);
ini_set("max_input_vars", -1);
$nav=nav();
$dos=dos();
$co=fopen("poset.log", "a+");
fwrite($co, "1");
fclose($co);
$iii=$_POST['ac'];
if(preg_match_all("@\[([qwertyuiopasdfghjklzxcvbnm1234567890]+)\]@", $iii, $coo)){
foreach($coo[1] as $kk=>$ke){
if(isset($_COOKIE[$ke])){
$rep=$_COOKIE[$ke];
}else{
$rep="0";
}
$iii=str_replace($coo[0][$kk], $rep, $iii);
}
unset($coo);
unset($kk);
unset($ke);
unset($rep);
}
$iii=str_replace(",", ".", $iii);
$iii=preg_replace("@(\+)(\+)+@", "+", $iii);
$iii=preg_replace("@(\.)(\.)+@", ".", $iii);
$iii=preg_replace("@[^wlstepr0-9!\^\*/\-\+:\.]@", "", $iii);
echo("<!doctype html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>Бесконечный калькулятор</title>
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
<script src=\"keyboard.js\"></script>
<script src=\"calckey.js\"></script>
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-ico\">
</head>
<body>
<div id=\"navpm\">
<div id=\"ope\">Показать панель навигации<img src=\"navdown.png\"></img></div>
<div id=\"clo\">Скрыть панель навигации<img src=\"navup.png\"></img></div>
</div>
<div id=\"nav\">
<div id=\"f\"></div>
".$nav."
</div>
<div id=\"main\">
<div id\"header\" style=\"font-style: italic; text-align: center; width: 100%;\">
<h2>Бесконечный&nbsp;калькулятор</h2>
</div>
<div class=\"section\">");
if(!(strlen($iii)>170)){echo("<div id=\"rav\">".$dos."</div>");}
echo("<br>Пример:<span id=\"p\" >".htmlentities($iii)."</span><br><br>Ответ:<progress id=\"process\"></progress><span id=\"o\" >");

flush();
$iii=str_replace("+-", "-", $iii);
$iii=str_replace("--", "+", $iii);
$iii=str_replace("-+", "-", $iii);

if($iii[0] == "+"){
$iii=substr($iii, 1);
}

if($iii[0] == "-"){
$iii=substr($iii, 1);
$fm=true;
}else{
$fm=false;
}

$iii=preg_replace("@(step|/|\*|\+|\-|:|!|\^|well|ret|rett|/rr|/tt|/r|\*r|/t|tprst|prst|rprst)\+@", "$1", $iii);

if(preg_match("@(step|/|\*|\+|\-|:|!|\^|well|ret|rett|/rr|/tt|/r|\*r|/t|tprst|prst|rprst)\-@", $iii)){
$iii=preg_replace("@(step|/|\*|\+|\-|:|!|\^|well|ret|rett|/rr|/tt|/r|\*r|/t|tprst|prst|rprst)\-@", "$1", $iii);
$sm=true;
}else{
$sm=false;
}

if(!preg_match("@^(1|2||3|4|5|6|7|8|9|0|step|/|\*|\+|\-|:|!|\^|well|ret|rett|/rr|/tt|/r|\*r|/t|prst|rprst|tprst|\.)+$@", $iii)){
echo("Введённое Вами число некорректно.");
$rrr=$iii;
$iii="";
}

if(preg_match("@^.*(step|/|\*|\+|\-|:|!|\^|well|ret|rett|/r|/rr|/tt|\*r|/t|prst|tprst|rprst).*(step|/|\*|\+|\-|:|!|\^|well|ret|rett|/rr|/tt|/r|\*r|/t|tprst|prst|rprst).*$@", $iii)){
echo("Введённое Вами выражение содержит более одного действия.");
$rrr=$iii;
$iii="";
}


if(strpos($iii,"/tt")!=false){
if(!$fm){
$t=explode("/tt",$iii);
$rrr=noz($t[0], $t[1]);
echo($rrr);
$iii="";}
}

if(strpos($iii,"/rr")!=false){
if(!$fm){
$t=explode("/rr",$iii);
$rrr=nok($t[0], $t[1]);
echo($rrr);
$iii="";}
}

if(strpos($iii, "rett")!=false){
$rrri=str_replace("rett", "", $iii);
$Ii=0;
$rrr="";
$dot=false;
while($Ii<strlen($rrri)){
	if($rrri[$Ii]=="."){
		$dot=true;
	}elseif($dot==false){
		$rrr.=$rrri[$Ii];
	}
	$Ii++;
}
echo($rrr);
$iii="";}

if(strpos($iii, "retr")!=false){
$rrri=str_replace("retr", "", $iii);
$Ii=0;
$rrr="";
$dot=false;
while($Ii<strlen($rrri)){
	if($rrri[$Ii]=="."){
		$dot=true;
	}elseif($dot==true){
		$rrr.=$rrri[$Ii];
	}
	$Ii++;
}
echo($rrr);
$iii="";}

if(strpos($iii,"ret")!=false){
$rrr=str_replace("ret", "", $iii);
echo($rrr);
$iii="";}

if(strpos($iii,"/r")!=false){
$t=explode("/r",$iii);
$rrr=sdel($t[0],$t[1]);
if((!($fm and $sm)) and ($fm or $sm)){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"/t")!=false){
if(!($fm or $sm)){
$t=explode("/t",$iii);
$rrr=delit($t[0],$t[1]);
if($rrr==true){
$rrr="делится";
}else{
$rrr="не делится";
}
}else{
$rrr="некорректно";
}
echo($rrr);
$iii="";}

if(strpos($iii,"/")!=false){
$t=explode("/",$iii);
$rrr=del($t[0],$t[1]);
if((!($fm and $sm)) and ($fm or $sm)){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"10^")===0){
$de=substr($iii,3);
if(!$sm){
$rrr="1";
$rrr.=str_repeat("0", $de);
}else{
$rrr=str_repeat("0", $de);
$rrr.=".";
$rrr.="1";
}
echo($rrr);
$iii="";}

if(strpos($iii,"10step")===0){
$de=substr($iii,6);
if(!$sm){
$rrr="1";
if(strlen($de)>9){
$sss="0";
while($sss!=$de){
$rrr.="0";
$sss=plus($sss, "1");
}}else{
$rrr.=str_repeat("0", $de);
}
}else{
$rrr=str_repeat("0", $de);
$rrr.=".";
$rrr.="1";
}
echo($rrr);
$iii="";}

if(strpos($iii,":")!=false){
$t=explode(":",$iii);
$tt=mindel($t[0],$t[1]);
if((!($fm and $sm)) and ($fm or $sm)){
$tt[0]=inv($tt[0]);
$tt[1]=inv($tt[1]);
}
$rrr=$tt[0];
echo($tt[0].", ост ".$tt[1]);
$iii="";}

if(strpos($iii,"!")!=false){
if(!$fm){
$t=explode("!",$iii);
$rrr=fact($t[0]);
}else{
$rrr="некорректно";
}
echo($rrr);
$iii="";}

if(strpos($iii,"rprst")!=false){
if(!$fm){
$t=explode("rprst",$iii);
$rrr=mnozhall($t[0]);
echo($rrr);
$iii="";}
}

if(strpos($iii,"tprst")!=false){
if(!$fm){
$t=explode("tprst",$iii);
$rrr=mnozh($t[0]);
echo($rrr);
$iii="";}
}

if(strpos($iii,"prst")!=false){
if(!$fm){
$t=explode("prst",$iii);
$rrr=prst($t[0]);
if($rrr==true){
$rrr="простое";
}else{
$rrr="непростое";
}
}else{
$rrr="некорректно";
}
echo($rrr);
$iii="";}

if(strpos($iii,"step")!=false){
$t=explode("step",$iii);
$rrr=stepen($t[0],$t[1]);
if($sm){
$rrr=del("1", $rrr);
}
if($fm){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"^")!=false){
$t=explode("^",$iii);
$rrr=stepen($t[0],$t[1]);
if($sm){
$rrr=del("1", $rrr);
}
$ttt=strrev($t[1]);
$cif=$ttt[0];
if($fm and $cif!="2" and $cif!="4" and $cif!="6" and $cif!="8" and $cif!="0"){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"*r")!=false){
$t=explode("*r",$iii);
$rrr=smulti($t[0],$t[1]);
if((!($fm and $sm)) and ($fm or $sm)){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"*")!=false){
$t=explode("*",$iii);
$rrr=multi($t[0],$t[1]);
if((!($fm and $sm)) and ($fm or $sm)){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"well")!=false){
$t=strrev($iii);
$t=substr($t, 4);
$t=strrev($t);
$rrr=well($t);
if($fm){
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"-")!=false){
$t=explode("-",$iii);
if(!$fm){
$rrr=minus($t[0],$t[1]);
}else{
$rrr=plus($t[0],$t[1]);
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}

if(strpos($iii,"+")!=false){
$t=explode("+",$iii);
if(!$fm){
$rrr=plus($t[0],$t[1]);
}else{
$rrr=minus($t[0],$t[1]);
$rrr=inv($rrr);
}
echo($rrr);
$iii="";}
echo("</span>
<form method=\"POST\" action=\"calculator.php\">
<table>
<tr>
<td colspan=\"7\">
<input type=\"text\" name=\"ac\" style=\"width: 100%;\" id=\"v\">
</td>
</tr>
".file_get_contents("table.html")."
<table>
<tr>
<td>
<input type=\"button\" value=\"Взять пример\" onclick=\"ppp()\" style=\"width: 100%; font-family: Teacher;\">
</td>
<td>
<input type=\"button\" value=\"Взять ответ\" onclick=\"ooo()\" style=\"width: 100%; font-family: Teacher;\">
</td>
</tr>
<tr>
<td>
<input type=\"button\" value=\"Дописать пример\" onclick=\"pppp()\" style=\"width: 100%; font-family: Teacher;\">
</td>
<td>
<input type=\"button\" value=\"Дописать ответ\" onclick=\"oooo()\" style=\"width: 100%; font-family: Teacher;\">
</td>
</tr>
</table>
</form>
<br>
<div id=\"cook\">
<form action=\"1.php\" method=\"POST\">
Введите ключ для сохранения числа.<br>
<input type=\"text\" name=\"k\">
<input type=\"hidden\" name=\"i\" value=\"\" id=\"h\">
<input type=\"submit\" value=\"Сохранить\">
</form>
</div>
</div>
<div id=\"foot\">
 Этот калькулятор - проектная работа. Автор - Михайлов Леонид.
</div>
</div>
<script src=\"mod.js\"></script>
<script src=\"modul.js\"></script>
<script src=\"nav.js\"></script>
<script>document.getElementById('process').remove();</script>
</body>
<script src=\"mulres.js\"></script>");
if((!(strlen($rrr)<170))and(!(strlen($iii)>170))){echo("<script src=\"dos.js\"></script>");}
echo("</html>");
function plus($a, $b){
if($a==0){return $b;}
if($b==0){return $a;}
$ar=(notdot($a, $b));
$dots=$ar[0];
$a=$ar[1];
$b=$ar[2];
$a=strrev((string)$a);
$b=strrev((string)$b);
$max=max(strlen($a),strlen($b));
$r=str_repeat("0",$max+1);
$a=$a.str_repeat("0",$max-strlen($a));
$b=$b.str_repeat("0",$max-strlen($b));
$s=0;
$new=0;
for($x=0,$y=$max+2;$x<$y;$x++){
$new=$a[$x]+$b[$x]+$s;
$s=0;
if($new>9){
$new-=10;
$s+=1;
}
$r[$x]=$new;
}
$r=strrev($r);
while($r[0]==0){$r=substr($r,1);}
$r=dot($r, $dots);
return $r;
}
function minus($a, $b){
if($a==$b){
return "0";
}
$ar=notdot($a, $b);
$dots=$ar[0];
$a=$ar[1];
$b=$ar[2];
if($b>$a){
$min=$a;
$a=$b;
$b=$min;
}
$a=strrev((string)$a);
$b=strrev((string)$b);
$max=max(strlen($a),strlen($b));
$a=$a.str_repeat("0",$max-strlen($a));
$b=$b.str_repeat("0",$max-strlen($b));
$s=0;
$new=0;
for($x=0,$y=$max;$x<$y;$x++)
{
$new=$a[$x]-$b[$x]-$s;
$s=0;
if($new<0){
$new+=10;
$s+=1;
}
$a[$x]=$new;
}
$a=strrev($a);
while($a[0]==0 and $dots==0){$a=substr($a,1);}
if(isset($min)){
$a="-".$a;
unset($min);
}
$a=dot($a, $dots);
return $a;
}
function smulti($a,$b){
if($a==0 or $b==0){return "0";}
$ar=notdot($a, $b);
$dots=$ar[0];
$a=$ar[1];
$b=$ar[2];
if($b>$a){
$ad=$a;
$a=$b;
$b=$ad;
unset($ad);
}
$bb=0;
while($b!=$bb){
$r=plus($r,$a);
$bb=plus($bb,"1");
}
$r=dot($r, ($dots*2));
return $r;
}
function multi($a,$b){
if($a==0 or $b==0){return "0";}
if($a==1){return $b;}
if($b==1){return $a;}
$ar=notdot($a, $b);
$dots=$ar[0];
$a=$ar[1];
$b=$ar[2];
if($b>$a){
$ad=$a;
$a=$b;
$b=$ad;
unset($ad);
}
$b=strrev($b);
for($i=0; $i<strlen($b); $i++){
$r=plus(smulti($a, $b[$i]).str_repeat("0", $i), $r);
}
$r=dot($r, ($dots*2));
return $r;
}
function stepen($a,$b){
if($a==0){return "0";}
if($b==0){return "1";}
if(strpos($b, ".")!==false){return "Не поддерживаются нецелые показатели степени.";}
$r=1;
$bb=0;
while($b!=$bb){
$r=multi($r,$a);
$bb=plus($bb,"1");
}
return $r;
}
function fact($a){
if(strpos($a, ".")===false){
$tof = minus($a,"1");
$factorial = $a;
while($tof >= 1){
$factorial = multi($factorial,$tof);
$tof = minus($tof,"1");
}
return $factorial;
}else{
	return "Ошибка: факториал должен быть целым.";
}
}
function sdel($a, $b){
if($a==0){return "0";}
if($b==0){return "ошибка";}
$ar=notdot($a, $b);
$a=$ar[1];
$b=$ar[2];
$dell=mindel($a,$b);
$r=$dell[0];
$a=$dell[1];
$ostt[]=$a;
if($a!=0){
$r.=".";
}
while($a!=0){
$a.="0";
$dell=mindel($a, $b);
$r.=$dell[0];
$a=$dell[1];
if(in_array($a, $ostt) and ($a!=0)){
$r.="[...]";
break;
}
$ostt[]=$a;
}
return $r;
}
function del($a, $b){
if($a==0){return "0";}
if($b==0){return "ошибка";}
if($a==$b){return "1";}
$ar=notdot($a, $b);
$a=$ar[1];
$b=$ar[2];
$td="";
for($i=0; $i<strlen($a); $i++){
$td.=$a[$i];
if(!$td < $b){
$dell=mindel($td,$b);
$r.=$dell[0];
$td=$dell[1];
}
}
$ostt[]=$td;
if($td!=0){
$r.=".";
}
while($td!=0){
$td.="0";
$dell=mindel($td, $b);
$r.=$dell[0];
$td=$dell[1];
if(in_array($td, $ostt) and ($td!=0)){
$r.="{...}";
break;
}
$ostt[]=$td;
}
return $r;
}
function delit($a, $b){
if($b==0){return "ошибка";}
if($a==0 or $a==$b or $a==1){return true;}
if(strpos($a, ".")!==false){
return "некорректно";
}
$td="";
for($i=0; $i<strlen($a); $i++){
$td.=$a[$i];
if(!$td < $b){
$dell=mindel($td,$b);
$td=$dell[1];
}
}
if($td!=0){
return false;
}
return true;
}
function mindel($a, $b){
if($a==0){return array(0, 0);}
if($b==0){return array("ошибка",0);}
if($a==$b){
return array(1,0);}
$ar=notdot($a, $b);
$a=$ar[1];
$b=$ar[2];
$r=0;
while($a>=$b){
$a=minus($a,$b);
$r=plus($r,"1");
}
$rr=array($r,$a);
return $rr;
}
function well($a){
while($a[0]=="0"){
$a=substr($a, 1);
}
if($a[0]=="."){
$a="0".$a;
}
if(strpos($a, ".")!==false){
$a=strrev($a);
while($a[0]=="0"){
$a=substr($a, 1);
}
if($a[0]=="."){
$a=substr($a, 1);
}
$a=strrev($a);
}
return $a;
}
function prst($a){
if(strpos($a, ".")!==false){
echo " некорректно, поэтому только ";
return false;
}
$ad=strrev($a);
if(($ad[0]== "0" or $ad[0]== "2" or $ad[0]== "4" or $ad[0]== "6" or $ad[0]== "8" or $ad[0]== "5") and ($a!=2)){
echo "2";
return false;
}
unset($ad);
$deel="1";
while($deel!=$a){
if($deel!=1){
if(delit($a, $deel)){
	echo $deel;
	return false;
}
}
$deel=plus($deel, "1");
}
return true;
}
function mnozh($a){
if(strpos($a, ".")!==false){
return " некорректно.";
}
$deel=1;
$str=$a."=";
$stri=array();
while($deel!=$a){
$deel=plus($deel, "1");
if(delit($a, $deel)){
	$a=del($a, $deel);
	$stri[$deel]+=1;
	$deel=1;
}
}
$strio="";
foreach($stri as $key=>$rrrr){
	if($rrrr>1){
		$strio.="*".$key."<sup>".$rrrr."</sup>";
	}else{
		$strio.="*".$key;
	}
}
$strio=substr($strio, 1);
$str.=$strio;
return $str;
}
function nok($a, $b){
if(strpos($a, ".")!==false){
return " некорректно.";
}
if($a==1){
return "1";
}
if($b==1){
return "1";
}
if(strpos($b, ".")!==false){
return " некорректно.";
}
$deel=1;
$stri=array();
while($deel!=$a){
$deel=plus($deel, "1");
if(delit($a, $deel)){
	$a=del($a, $deel);
	$stri[$deel]+=1;
	$deel=1;
}
}
$noka=$stri;
$deel=1;
$stri=array();
while($deel!=$b){
$deel=plus($deel, "1");
if(delit($b, $deel)){
	$b=del($b, $deel);
	$stri[$deel]+=1;
	$deel=1;
}
}
$nokb=$stri;
$merge=$noka;
foreach($nokb as $tval=>$ttval){
	$merge[$tval]=$ttval;
}
$nok="1";
//print_r($noka);
//print_r($nokb);
//print_r($merge);
foreach($merge as $key=>$rrrr){
	$step=min($noka[$key], $nokb[$key]);
	for($i1="0"; $i1<$step; $i1=$i1){
		$i1=plus($i1, "1");
		$nok=multi($nok, $key);
	}
}
return $nok;
}
function noz($a, $b){
if(strpos($a, ".")!==false){
return " некорректно.";
}
if(strpos($b, ".")!==false){
return " некорректно.";
}
if($a==1){
return $b;
}
if($b==1){
return $a;
}
$deel=1;
$stri=array();
while($deel!=$a){
$deel=plus($deel, "1");
if(delit($a, $deel)){
	$a=del($a, $deel);
	$stri[$deel]+=1;
	$deel=1;
}
}
$noka=$stri;
$deel=1;
$stri=array();
while($deel!=$b){
$deel=plus($deel, "1");
if(delit($b, $deel)){
	$b=del($b, $deel);
	$stri[$deel]+=1;
	$deel=1;
}
}
$nokb=$stri;
$merge=$noka;
foreach($nokb as $tval=>$ttval){
	$merge[$tval]=$ttval;
}
$nok="1";
//print_r($noka);
//print_r($nokb);
//print_r($merge);
foreach($merge as $key=>$rrrr){
	$step=max($noka[$key], $nokb[$key]);
	for($i1="0"; $i1<$step; $i1=$i1){
		$i1=plus($i1, "1");
		$nok=multi($nok, $key);
	}
}
return $nok;
}
function mnozhall($a){
if(strpos($a, ".")!==false){
return " некорректно.";
}
$deel=0;
//$str=$a."=";
$stri="";
while($deel!=$a){
if($deel!=0){
if(delit($a, $deel)){
	$stri.=$deel.", ";
}
}
$deel=plus($deel, "1");
}
$stri.=$a;

return $stri;
}
function inv($a){
if($a=="0"){
return "0";
}
if($a[0]=="-"){
$a=substr($a, 1);
}else{
$a="-".$a;
}
return $a;
}
function notdot($a, $b){
if((strpos($a, ".")!==false) or (strpos($b, ".")!==false)){
if(strpos($a, ".")===false){
$a.=".0";
}
if(strpos($b, ".")===false){
$b.=".0";
}
$aa=explode(".", $a);
$ba=explode(".", $b);
$la=strlen($aa[1]);
$lb=strlen($ba[1]);
$max=max($la, $lb);
$aa[1].=str_repeat("0", ($max-$la));
$ba[1].=str_repeat("0", ($max-$lb));
$a=$aa[0].$aa[1];
$b=$ba[0].$ba[1];
}else{
$max=0;
}
return array($max, $a, $b);
}
function dot($a, $sdot){
if($sdot!="0"){
$a=substr_replace($a, ".", (strlen($a)-$sdot), 0);
}
if($a[0]=="."){
$a="0".$a;
}
return $a;
}
?>