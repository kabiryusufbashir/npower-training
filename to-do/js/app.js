let myFormToDo = document.getElementById('myFormToDo');
let display = document.getElementById('display');
let toDo = document.getElementById('whatToDo');
  whatToDoAdd.onclick = function(){
    toDo = toDo.value;
    if(toDo == ""){
      alert('Not');
    }else{
      newDiv = document.createElement('p');
      newSpan = document.createElement('span');
        newSpan.innerHTML = toDo;
        newDiv.appendChild(newSpan);
        display.appendChild(newDiv);
        let position = document.getElementsByTagName('p')[0];
          display.insertBefore(newDiv, position);
    }
  }
