var add=document.getElementById("addBtn");
var main=document.querySelector("#main");
add.addEventListener('click',function(){
    addNote();
});
    const addNote=(text='')=>{

        var note=document.createElement('div');
        
        note.classList.add('note');
        note.innerHTML=`<div class="tool">
        <i class="save fas fa-save"></i>
        <i class="trash fas fa-trash" id="trash"></i>
    </div>
    <textarea>`+text+`</textarea>`;
    note.querySelector(".trash").addEventListener("click",function(){
        note.remove();
    })
    note.querySelector(".save").addEventListener("click",function(){
    // const save= document.getElementsByClassName("save");
    // save.addEventListener("click",function(){
        saveNote();
    })
    note.querySelector("textarea").addEventListener("focusout",function(){
       saveNote();
    })
    main.appendChild(note);
    saveNote();
    }
    
    var saveNote=()=>{
var notes=document.querySelectorAll(".note textarea");
console.log(notes);
var data=[];
notes.forEach((note) => {
    data.push(note.value);
    
}
)
if(data.length===0){
    localStorage.removeItem("notes");
}
else{
localStorage.setItem("notes",JSON.stringify(data));
}
console.log(data);


    }
    (
        function () {
var lsNote=JSON.parse(localStorage.getItem("notes"));
if(lsNote== null){
    addNote();
}
else{
            lsNote.forEach(
                (lsNote)=>{
addNote(lsNote);
                }
            )
            } 
        }
    )()
