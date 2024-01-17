var item=document.querySelector('#item');
var toDo=document.querySelector('#to-do-box');
item.addEventListener('keyup',function(event){
if(event.key=='Enter'){
    addList(this.value);
    this.value='';
}

})
const addList = (item1)=>{
var listItem=document.createElement('li');
listItem.classList.add("black");
listItem.innerHTML=`${item1}<i class="check fa-solid fa-check"></i><i class="fa-solid fa-xmark cancel"></i>`;
console.log(listItem);
listItem.querySelector('.cancel').addEventListener('click',function(){
listItem.remove()
});
listItem.querySelector('.check').addEventListener('click',function(){
    listItem.classList.remove('black');
    listItem.classList.toggle('done');
    //listItem.classList.add('black');
//     function myFunction() {
//     var element = document.getElementsByClassName("black");
//     element.classList.toggle("done");
//  }
    });
toDo.appendChild(listItem);
}
