let myFormToDo = document.getElementById('myFormToDo');
let display = document.getElementById('display');
let toDo = document.getElementById('whatToDo');
let whatToDoAdd = document.getElementById('whatToDoAdd');
let delAdd = document.querySelectorAll('#display .delete');

  const addForm = document.forms['myFormToDo'];

    addForm.addEventListener('submit', function(e){

      e.preventDefault();

      const value = addForm.querySelector('input[type="text"]').value;

          if(value == ""){
            alert('ToDo Field empty');
          }else{
            let newDiv = document.createElement('p');
            let newSpan = document.createElement('span');
            let newBtn = document.createElement('button');

              newSpan.textContent = value;
              newBtn.textContent = 'Delete';


              newBtn.setAttribute("class", "delete");
              newBtn.setAttribute("type", "button");
              newBtn.setAttribute("name", "del");

              display.appendChild(newDiv);
              newDiv.appendChild(newSpan);
              newDiv.appendChild(newBtn);

              let position = document.getElementsByTagName('p')[0];
                display.insertBefore(newDiv, position);
          }

    });

  Array.from(delAdd).forEach(function(btn){
    btn.addEventListener('click', function(e){
      e.preventDefault();
      const p = e.target.parentElement;
      p.parentNode.removeChild(p);
    });
  });
