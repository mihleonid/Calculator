function pods(){
document.getElementById("pp").style.display="none";
document.getElementById("buts").innerHTML="<input type=\"button\" value=\"Показать подсказку\" onclick=\"podo()\" style=\"font-family: Teacher;\">";
}
function podo(){
document.getElementById("pp").style.display="table";
document.getElementById("buts").innerHTML="<input type=\"button\" value=\"Скрыть подсказку\" onclick=\"pods()\" style=\"font-family: Teacher;\">";
}