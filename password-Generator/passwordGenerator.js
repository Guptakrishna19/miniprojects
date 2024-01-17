const uppercase="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const lowercase="abcdefghijklmnopqrstuvwxyz";
const number="1234567890";
const special="~!@#$%^&*()";
var show=document.getElementById('show-pass');
var length=document.getElementById('length');
var upper=document.getElementById('upper');
var lower=document.getElementById('lower');
var numberCheck=document.getElementById('number');
var specialCheck=document.getElementById('special');

// generate random data
const getrandomData =(dataset) =>{
return dataset[(Math.floor(Math.random()*dataset.length))]
}
const getPassword=(password="") => {
    if(upper.checked){
        password+=getrandomData(uppercase);
    }
    if(lower.checked){
        password+=getrandomData(lowercase);
    }
    if(numberCheck.checked){
        password+=getrandomData(number);
    }
    if(specialCheck.checked){
        password+=getrandomData(special);
    }
    if(password.length < length.value){
        return getPassword(password)
    }
    //console.log(password);
    console.log(truncateString(password,length.value));
    show.innerHTML=truncateString(password,length.value);
}
var btn=document.getElementById('generate');
btn.addEventListener("click",function(){
    getPassword();
});
// to trim the extra characters from the password
function truncateString(str, num) {
    if (str.length > num) {
      return str.slice(0, num) + "";
    } else {
      return str;
    }
  }
console.log(getPassword());