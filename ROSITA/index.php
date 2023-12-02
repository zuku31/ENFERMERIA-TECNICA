<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENFERMERÍA TÉCNICA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="icon" href="imagenes/icon.jpg">
    <link rel="stylesheet" href="css/carrusel.css">
</head>
<body>
    <HEader>
        <?php
        include('includes/menu.php')
        ?>
    </HEader>
    
    <main>
    <?php
        include('includes/slider.php')
        ?>
        <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4 mx-auto text-center">
    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="imagenes/libro_1.jpg" alt="">
    <h2 class="fw-normal">Módulos Profesionales</h2>
    <a type="button" class="w-100 btn btn-lg btn-outline-info" href="modulo.php">Más Detalles</a>
  </div>
</div>

<!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Historia</h2>
    <p class="lead">Se creo en el año 1996 mediante Resolución Directoral Nº 255 de 24 de Mayo de 1996 comienzan a funcionar las Carreras Profesionales de Enfermería Técnica y Computación e Informática.</p>
  </div>
  <div class="col-md-5">
    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg> -->
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="imagenes/modulo_1.jpg" alt="">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading fw-normal lh-1">Visión</h2>
    <p class="lead">El programa de estudios estará enmarcado en las tendencias y avances mundiales de la disciplina y en el desarrollo de los modelos y teoría de enfermería;
       estará ubicado en los primeros lugares a nivel nacional y contará con acreditación reconocida por su alta calidad científica y académica a nivel nacional e internacional.
       El programa de enfermería seguirá contando con una planta de profesores con las más altas calidades personales, científicas o disciplinares y profesionales.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg> -->
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="imagenes/enfermeria_40.jpg" alt="">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Misión</h2>
    <p class="lead">El programa de enfermería, en coherencia con la misión institucional orienta su que hacer a la búsqueda
       y profundización de la verdad alrededor de problemáticas significativas relacionadas con el cuidado de la salud de las personas,
        familias y grupos para contribuir con el desarrollo del conocimiento teórico y científico en esta área del saber.
        orienta su acción a la formación de profesionales de enfermería, con sentido humano y con calidad científica, ética, moral y humanística,
         centrada en el conocimiento del entorno, su compromiso social y la formación integral del estudiante.</p>
  </div>
  <div class="col-md-5">
    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg> -->
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="imagenes/mision_2.jpg" alt="">
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->
    </main>
    <HEader>
        <?php
        include('includes/pie.php')
        ?>
    </HEader>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>