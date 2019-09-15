let myFormToDo = document.forms.myFormToDo;
let toDo = myFormToDo.whatToDo;
  myFormToDo.onsubmit = function(){
    if(toDo.value == ""){
      alert('Not');
    }else{
      alert('Yes');
    }
  }
