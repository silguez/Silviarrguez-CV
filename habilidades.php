<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="estilo/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

  <title>CV Silvia R. - Habilidades</title>

</head>

<body class="dia">
  <header>
    <canvas id="marcaPersonal">
      Your browser does not support the HTML canvas tag.
    </canvas>

    <menu>
      <a href="index.php">Inicio</a>
      <a href="academicos.php">Datos académicos</a>
      <a href="experiencia.php">Experiencia</a>
      <a href="informatica.php">Informática</a>
      <a href="habilidades.php" class="active">Habilidades</a>
    </menu>

    <div>
      <button id="btn" onclick="modos()">Modo oscuro</button>
    </div>
  </header>

  <h1>Habilidades</h1>
  <div class="parrafoAncho">
    <img src="iconos/engranaje.png" style="height: 25%; margin-left: 5%;">
    
    <ul>
      <li>Fotografía</li>
      <li>Dibujo con tableta gráfica WACOM</li>
      <li>Trabajo en grupo colaborativo</li>
      <li>Presto interés y motivación a mi trabajo</li>
      <li>Dotes comunicativos</li>
      <li>Creatividad</li>
      <li>Favorezco climas de trabajo y participación</li>
      <li>Atención al público</li>
    </ul>

    <p id="parrafo">
      A continuación se muestran fotografías realizadas por Silvia Rodríguez Rodríguez, el tema elegido
      ha sido la naturaleza, y están ordenadas por diferentes categorías. </br></br>
      Es interesante destacar que la disposición de las imágenes no son aleatorias, sino que se basan en la armonía
      de sus colores.
    </p>
  
  </div>
  <!-- botones para accedes a las diferentes categorias de las imagenes -->
  <div id="navegacion2" onclick="categorias()">
    <h3>Categorias</h3>
    <button class="categoria flores" data-filter="flores">Flores</button>
    <button class="categoria arboles" data-filter="arboles">Árboles</button>
    <button class="categoria costa" data-filter="costa">Costa</button>
    <button class="categoria todos active" data-filter="todos"><b>Todas</b></button>
  </div>

  <!-- parte en la que se cargan las imagenes del xml -->
  <div id="mensaje" onload="leerXML()">FOTOS XML</div>
  <!-- footer completo -->
  <?php
    include 'footer.php';
  ?>
  <!-- jquery y javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/logo.js"></script>
</body>