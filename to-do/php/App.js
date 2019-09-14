let myBody = document.getElementsByTagName('body');
let title = document.getElementById('title');

let date = new Date();
let year = date.getFullYear();
let month = date.getMonth();
let day = date.getDay();
let hours = date.getHours();
let time = date.getTime();

  if(hours >= 1 && hours <= 11){
    title.innerHTML = 'Welcome to your Todo App<br /> What do you want to add this Beautiful Morning?';
  }else if(hours >=12 && hours <= 17){
    myBody[0].style.backgroundColor = "#ddd";
    title.innerHTML = 'Welcome to your Todo App<br /> What do you want to add this Afternoon?';
  }else if(hours >=18 && hours <= 19){
    myBody[0].style.backgroundColor = "#dd3";
    title.innerHTML = 'Welcome to your Todo App<br /> What do you want to add this Evening?';
  }else{
    myBody[0].style.backgroundColor = "#333";
    myBody[0].style.color = "#000";
    title.innerHTML = 'Welcome to your Todo App<br /> What do you want to add this Night?';
    title.style.color = '#000';
  }
