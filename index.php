<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="estilo/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

  <title>CV Silvia R. - Inicio</title>

</head>

<body class="dia">
  <header>
    <canvas id="marcaPersonal">
      Your browser does not support the HTML canvas tag.
    </canvas>

    <menu>
      <a href="index.php" class="active">Inicio</a>
      <a href="academicos.php">Datos académicos</a>
      <a href="experiencia.php">Experiencia</a>
      <a href="informatica.php">Informática</a>
      <a href="habilidades.php">Habilidades</a>
    </menu>

    <div>
      <button id="btn" onclick="modos()">Modo oscuro</button>
    </div>
  </header>

  <!-- texto de mision, vision y valores -->
  <div class="inicio"></div>

  <div class="centrado">
    <div class="parraf">
      <div class="fa fa-bullseye" style="font-size:48px;color:red; text-align: center;"></div><br>
      <h2>MISIÓN</h2>
      <p>Busco desarrollarme como profesional aprendiendo cada día para conseguir una gran calidad en cada proyecto.
        Actualmente tengo disponibilidad completa para adaptarme a cualquier reto.
      </p>

    </div>

    <div class="parraf">
      <div class="fa fa-eye" style="font-size:48px; color:rgb(8, 116, 17); text-align: center;"></div><br>
      <h2>VISIÓN</h2>
      <p>Con esta página trato de mostrar qué soy capaz de proporcionar. Esta página está montada usando diferentes
        herramientas. HTML, CSS y javascript son los lenguajes que forman la base de esta web, asimismo se han usando
        imagenes en SVG para no perder calidad, adaptabilidad para todo tipo de pantallas usando @media con CSS.
        La fotografía son imágenes con extensión png realizadas con una cámara Nikon. Dicha galeria está cargada
        con una base de datos xml, donde se encuentran las fotografías.
      </p>

    </div>

    <div class="parraf">
      <div class="fa fa-diamond" style="font-size:48px;color:rgb(7, 101, 243); text-align: center;"></div><br>
      <h2>VALORES</h2>
      <p>En esta página web se aporta un valor de conocimiento de diseño, se puede observar el tratamiento de colores,
        en su selección y composición. La fotografía y demás material es propia, en ella se trata de mostrar una armonía
        en su composición y colores. Por último se ha tenido en cuenta una coherencia en el objetivo último que es 
        mostrar un balance de currículum y portfolio en un mismo espacio.
      </p>

    </div>

  </div>

  <?php
    include 'footer.php';
  ?>

    <!-- jquery y javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/logo.js"></script>
</body>

</html>