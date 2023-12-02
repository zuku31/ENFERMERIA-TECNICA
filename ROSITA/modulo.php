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
    <link rel="stylesheet" href="css/modulo.css">
</head>
<body>
    <HEader>
        <?php
        include('includes/menu.php')
        ?>
    </HEader>
    <main>
    <div class="container py-3">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">MODULOS PROFESIONALES</h1>
      <p class="fs-5 text-body-secondary">El Programa De Estudios Ofrece Los Siguientes Modulos Especificos</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">MODULO 1</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Promoción De La Salud y Prevención Del Daño</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>INCLUYE:</li>
              <li>SEMESTRE 1</li>
              <li>SEMESTRE 2</li>
              <li>CERTIFICADO POR MODULO</li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-outline-info" href="modulo1.php">DETALLES</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">MODULO 2</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Atención De Enfermería Básica e Integral Para La Salud.</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>SEMESTRE 3</li>
              <li>SEMESTRE 4</li>
              <li>CERTIFICADO POR MODULO</li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-outline-info" href="modulo2.php">DETALLES</a>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">MODULO 3</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Atención Integral Para La Salud En Servicios Especializados</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>SEMESTRE 5</li>
              <li>SEMESTRE 6</li>
              <li>CERTIFICADO POR MODULO</li>
              <li></li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-outline-info" href="modulo3.php">DETALLES</a>
          </div>
        </div>
    </div>

    </main>
    <HEader>
        <?php
        include('includes/pie.php')
        ?>
    </HEader>
</body>
</html>