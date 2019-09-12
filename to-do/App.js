let myBody = document.getElementById('body');

let date = new Date();
let year = date.getFullYear();
let month = date.getMonth();
let day = date.getDay();
let hours = date.getHours();
let time = date.getTime();
  if(hours >= 1 && hours <= 11){
    console.log('Good Morning...');
  }else if(hours >=12 && hours <= 17){
    console.log('Good Afternoon');
  }else if(hours >=18 && hours <= 19){
    console.log('Good evening');
  }else{
    console.log('Good Night');
    document.write('Good Night!!!')
    myBody.style.backgroundColor = "#000";
    myBody.style.color = "#fff";
    document.getElementById('title').style.color = "#000";
  }
