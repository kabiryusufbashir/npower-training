//let myFormToDo = document.getElementById('myFormToDo');
let display = document.getElementById('display');
let toDo = document.getElementById('whatToDo');
let whatToDoAdd = document.getElementById('whatToDoAdd');
let delAdd = document.querySelectorAll('#display .delete');

  Array.from(delAdd).forEach(function(btn){
    btn.addEventListener('click', function(e){
      const p = e.target.parentElement;
      p.parentNode.removeChild(p);
    });
  });

   whatToDoAdd.addEventListener('click', function(e){
     toDo = toDo.value;
       if(toDo == ""){
         alert('Not');
       }else{
         let newDiv = document.createElement('p');
         let newSpan = document.createElement('span');
         let newBtn = document.createElement('button');

           newSpan.innerHTML = toDo;

           newBtn.setAttribute("name", "del");
           newBtn.setAttribute("class", "delete");
           newBtn.innerHTML = 'Delete';

           display.appendChild(newDiv);
           newDiv.appendChild(newSpan);
           newSpan.appendChild(newBtn);

           let position = document.getElementsByTagName('p')[0];
             display.insertBefore(newDiv, position);
       }
   });
