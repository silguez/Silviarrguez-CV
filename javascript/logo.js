var c = document.getElementById("marcaPersonal");
var ctx = c.getContext("2d");

ctx.fillStyle = '#29FFE5';
ctx.fillRect(10, 50, 90, 15); //los dos ultimos indican width y height

ctx.font = loadFont;
ctx.fillStyle = 'white';
ctx.fillText("SILVIARRGUEZ", 40, 90);

ctx.fillStyle = '#29FFE5';
ctx.fillRect(90, 100, 90, 15);

//fuente
function loadFont() {
    var link = document.createElement('link');
    ctx.font = '20px aAreaKilometer50';
    link.rel = 'stylesheet';
    document.head.appendChild(link);
  }
  
  document.getElementById('marcaPersonal').addEventListener('click', loadFont);


 //tengo que poner la fuente a Area Kilometer 50 
