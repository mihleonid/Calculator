function fmove(evt){
if(cu){
document.getElementById("nav").style.width="calc(100vw - " + evt.pageX + "px - 2.5px)";
document.getElementById("main").style.width="calc(" + evt.pageX + "px - 21.5px)";
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
document.body.style.cursor="ew-resize";
}
function curmain(){
document.body.style.cursor="auto";
}
function ffclose(){
document.getElementById("nav").style.display="none";
document.getElementById("ope").style.display="block";
document.getElementById("clo").style.display="none";
document.getElementById("main").style.width="calc(100vw - 8px)";
document.getElementById("main").style.height="calc(100vh - 20px)";
/*if(document.getElementById("foot").style.display=="none"){
document.getElementById("main").style.height="calc(100vh - 20px + 8px)";
document.getElementById("main").style.innerHTML="calc(100vh - 20px + 8px)";
}*/
}
function ffopen(){
document.getElementById("nav").style.display="block";
document.getElementById("clo").style.display="block";
document.getElementById("ope").style.display="none";
document.getElementById("main").style.width="";
document.getElementById("main").style.height="";
}
document.body.addEventListener("mousemove", fmove, false);
document.getElementById("f").addEventListener("mouseup", noc, false);
document.getElementById("f").addEventListener("mousedown", curss, false);
document.getElementById("f").addEventListener("mouseover", curdrag, false);
document.getElementById("f").addEventListener("mouseout", curmain, false);
document.getElementById("ope").addEventListener("mousedown", ffopen, false);
document.getElementById("clo").addEventListener("mousedown", ffclose, false);
/*if(document.navigator.width < 740){
document.getElementById("nav").style.width="";
document.getElementById("main").style.width="";
}*/