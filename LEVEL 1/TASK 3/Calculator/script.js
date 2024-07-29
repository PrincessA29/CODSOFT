let display=document.getElementById("screen");
function allclear(){
  display.value="";
}

function show(n){
  display.value+=n;
}

function calc(){
  display.value = eval(display.value);
}

function del(){
  display.value = display.value.slice(0,-1);
}

