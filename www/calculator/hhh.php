<?
function dos(){
	if(file_exists("dos.html")){
		$file=fopen("dos.html", "r");
		$con=fread($file, filesize("dos.html"));
		fclose($file);
		return $con;
	}else{
		return "A=пr^2<br>a^2+b^2=c^2 <br>S=vt<br>0=0*n";
	}
}
function nav(){
	if(file_exists("nav.html")){
		$file=fopen("nav.html", "r");
		$con=fread($file, filesize("nav.html"));
		fclose($file);
		return $con;
	}
}
?>