const endDate="20 Jan 2024 10:00 PM";
var input=document.querySelectorAll("input");
setInterval(function clock(){
    const end=new Date(endDate);
    // console.log(end);
    const now=new Date();
    // console.log(now);
    const diff=(end-now)/1000;
    // console.log(diff);
input[0].value=Math.floor(diff/24/3600);
input[1].value=Math.floor((diff/3600)%24);
input[2].value=Math.floor((diff/60)%60);
input[3].value=Math.floor(diff%60);
// var a=Math.floor(diff/3600/24);
// console.log(a);
},1000);

//clock()