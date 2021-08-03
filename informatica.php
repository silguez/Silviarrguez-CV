<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="estilo/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

  <title>CV Silvia R. - Informática</title>

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
      <a href="informatica.php" class="active">Informática</a>
      <a href="habilidades.php">Habilidades</a>
    </menu>

    <div>
      <button id="btn" onclick="modos()">Modo oscuro</button>
    </div>
  </header>

  <div class="centrarContenido">
    <u><h1>Informática</h1></u>
    <h2>Paquetes informáticos</h2>
    <figure class="simbolos">
      <img src="iconos/adobe.jpg" alt="iconos illustrator, indesign, photoshop">
      <p>Adobe Illustrator, Indesign y Photoshop</p>
    </figure>

    <figure class="simbolos">
      <img src="iconos/drupal.png" alt="icono drupal">
      <p>Drupal</p>
    </figure>

    <figure class="simbolos">
      <img src="iconos/git.png" alt="icono github desktop">
      <p>Github Desktop</p>
    </figure>
    
    <figure class="simbolos">
      <img src="https://www.technodyan.com/wp-content/uploads/2015/02/Microsoft-Office.png" alt="iconos microsoft office">
      <p>Paquete de Microsoft Office (Excel, Word, Power Point)</p>
    </figure>
    
    <figure class="simbolos">
      <img src="iconos/wordpress.png" alt="icono wordpress">
      <p>Wordpress, con conocimientos en elementor y woocommerce</p>
    </figure>

    <figure class="simbolos">
      <img src="https://desarrolloweb.com/storage/collection_images/actual/3H3w1fySUnrw7yqFYTXZISC1Z4qpRBdYLiUuqPCr.png" alt="icono xampp">
      <p>Xampp</p>
    </figure>

    <h2 style="margin-top:10%;">Programación web</h2>
    <img src="iconos/logotipos-code.jpg" style="height: 80%; margin:2%;">
  </div>
  <?php
    include 'footer.php';
  ?>
  <!-- jquery y javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/logo.js"></script>
</body>