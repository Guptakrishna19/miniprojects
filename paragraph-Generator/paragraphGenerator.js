var search=document.querySelector("#search");
var generateButton=document.querySelector("#generate");
var para=document.querySelector("#para");
var text=['ram','shivam','bhoomi','rajan','krishna'];
    generateButton.addEventListener('click',function(){
        generate();
    });
    // shuffle the aaray
    function shuffle(array) {
        let currentIndex = array.length,  randomIndex;

      
        // While there remain elements to shuffle.
        while (currentIndex > 0) {
      
          // Pick a remaining element.
          randomIndex = Math.floor(Math.random() * currentIndex);
          currentIndex--;
      
          // And swap it with the current element.
          [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]];
        }
      
        return array;
      }

    //   generate the random paragram 
const generate=()=>{
    console.log(search.value);
    if(isNaN(search.value)|| search.value < 0 || search.value > 9){
        var random=Math.floor(Math.random() * text.length);
        console.log(random);
        para.innerHTML=`<p>${text[random]}</p>`;
        // search.value='';
    }
    else{
        const localText = shuffle(text);
        const data = localText.slice(0, search.value)
        const paras = data.map(
            (d) => {
                return `<p> ${d} </p>`
            }
        )
    console.log(paras);
    console.log(paras.join(''));

    para.innerHTML=paras.join('');

        }
    }
   