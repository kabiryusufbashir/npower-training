let myFormToDo = document.forms.myFormToDo;
let display = document.getElementById('display');
let toDo = myFormToDo.whatToDo;
  myFormToDo.onsubmit = function(){
    toDo = toDo.value;
    if(toDo == ""){
      alert('Not');
    }else{
      newDiv = document.createElement('div');
      newSpan = document.createElement('span');
        display.appendChild(newDiv);
        newDiv.appendChild(newSpan);
        newSpan.innerHTML = toDo;
          display.insertBefore(newDiv, display.getElementsByTagName('div'));
    }
  }
