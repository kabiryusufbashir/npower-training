let myFormToDo = document.getElementById('myFormToDo');
let display = document.getElementById('display');
let toDo = document.getElementById('whatToDo');
let whatToDoAdd = document.getElementById('whatToDoAdd');

  whatToDoAdd.onclick = function(){
    toDo = toDo.value;
    if(toDo == ""){
      alert('Not');
    }else{
      let newDiv = document.createElement('p');
      let newSpan = document.createElement('span');
      let newBtn = document.createElement('button');

        newSpan.innerHTML = toDo;

        newSpanBtn.setAttribute("name", "del");
        newSpanBtn.innerHTML = 'Delete';

        display.appendChild(newDiv);
        newDiv.appendChild(newSpan);
        newSpan.appendChild(newBtn);

        let position = document.getElementsByTagName('p')[0];
          display.insertBefore(newDiv, position);
    }
  }
