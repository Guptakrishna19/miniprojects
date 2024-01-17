var color=document.getElementById("color");
var box=document.getElementsByClassName("box");
var title=document.querySelector("h2");
color.addEventListener("click",function(){
var random=Math.floor(Math.random()*16777215);
var colorgen="#"+random.toString(16);
title.style.backgroundColor=colorgen;
title.innerHTML=colorgen;

});