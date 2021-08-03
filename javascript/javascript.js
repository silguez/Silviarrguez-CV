let registrados = [];
leerXML();

function leerXML() {
  // lee desde GitHub.
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      miFuncion(this);
    }
  };
  xhr.open("GET", "https://silguez.github.io/CMVPublico/datos.xml", true);

  xhr.send();
}
function miFuncion(xml) {
  var i;
  var nombre;
  var foto;
  var descripcion;
  var pie;
  var clase;
  var elemento = [];
  var xmlDoc = xml.responseXML;
  var contenedor = "";
  var y = xmlDoc.getElementsByTagName("elemento");


  contenedor += "<div class='default'>";
  for (i = 0; i < y.length; i++) {
    // leo las etiquetas del xml
    id = y[i].getElementsByTagName("id")[0].childNodes[0].nodeValue;
    nombre = y[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue;
    foto = y[i].getElementsByTagName("foto")[0].childNodes[0].nodeValue;
    pie = y[i].getElementsByTagName("pie")[0].childNodes[0].nodeValue;
    descripcion = y[i].getElementsByTagName("descripcion")[0].childNodes[0].nodeValue;
    clase = y[i].getElementsByTagName("clase")[0].childNodes[0].nodeValue;

    //añado contenido html para agregar las imagenes usando las variables (xml)
    contenedor += `<div class='container ${clase}'>
                    <div>
                      <h2>${nombre}</h2><br>
                        <p>${descripcion}</p><br><br>
                        <figcaption><b>${pie}</b></figcaption>
                    </div>
                    
                    <a href='#img${id}'><img  class='eachPh' src='${foto}' +  alt='${nombre}'/></a>
                  </div>

                    <div class='modal' id='img${id}'>
                      <h3>${nombre}</h3>
                      <a href='' class='cerrar'>X</a>
                      <div class='imagen'>
                        <a href=''><img src='${foto}' alt='${nombre}'></a>
                      </div>
                    </div>`

    elemento = [foto, nombre, pie, descripcion, clase];
    registrados.push(elemento);
  }
  contenedor += "</div>"
  document.getElementById("mensaje").innerHTML = contenedor;

  // muestro en consola el array
  registrados.forEach((elemento) => {
    elemento.forEach((datos) => {
      console.log(datos);
    });
  });

  var galeria = document.getElementById('galeria');

}

// para cambiar de modo oscuro a claro y viceversa

function modos() {
  document.body.classList.toggle("bdark");
  let botonCambio = $("#btn").text();
  if (botonCambio == 'Modo claro') {
    $("#btn").text('Modo oscuro');
  } else {
    $("#btn").text('Modo claro');
  }

  //guardar modo en localstorage

  if (document.body.classList.contains('bdark')) {
    localStorage.setItem('darkMode', 'true');
  } else {
    localStorage.setItem('darkMode', 'false');
  }
};

//obtenemos el modo actual

if(localStorage.getItem('darkMode') === 'true'){
  document.body.classList.addClass("bdark");
}else{
  document.body.classList.removeClass("bdark");
}

// funcion de categorias de imagenes

function categorias() {
  $(document).ready(function () {
    $(".categoria").click(function () {

      var filtro = $(this).attr("data-filter");
      if (filtro == "todos") {
        $(".container").show(500);
      } else {
        $(".container").not("." + filtro).hide(500);
        $(".container").filter("." + filtro).show(500);
      }
    });

    $("button").click(function () {
      $(this).addClass("active").siblings().removeClass("active");
    });
  });
}


