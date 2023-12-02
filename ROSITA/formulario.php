<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRARSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="imagenes/icon.jpg">
</head>
<HEader style="margin-top: 80px;">
        <?php
        include('includes/menu.php')
        ?>
<body>
   <DIV class= "container">
    <form class="row g-3 mt-3">
        <div class="col-4">
            <label for="emailInput" class= "form-label">Email:</label>
            <input type="email" class="form-control" id="emailInput" placeholder="Ingresar Correo">

        </div>

        <div class="col-4">
            <label for="inputPass" class= "form-label">Contraseña:</label>
            <input type="password" class="form-control" id="inputPass" placeholder="Ingresar Clave">

        </div>

        <div class="col-4">
            <label for="inputPass" class= "form-label">Confirmar:</label>
            <input type="password" class="form-control" id="inputPass" placeholder="Ingresar Clave">

        </div>

        <div class="col-12">
            <label for="inputNombres" class= "form-label">Nombres Y Apellidos:</label>
            <input type="text" class="form-control" id="inputNombres" placeholder="Nombres Y Apellidos">

        </div>

        <div class="col-6">
        <label for="inputGenero" class= "form-label">Genero:</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Radiousgenero1">
        <label class="form-check-label" for="Radiousgenero1">
        Femenido
        </label>
        </div>
        

        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Radiousgenero2">
        <label class="form-check-label" for="Radiousgenero2">
        Masculino
        </label>
        </div>

        </div>

        <div class="col-12">
            <label for="inputNombres" class= "form-label">Nombres Y Apellidos:</label>
            <input type="text" class="form-control" id="inputNombres" placeholder="Nombres Y Apellidos">

        </div>

        <div class="col-12">
            <label for="inputDireccion" class= "form-label">Dirección:</label>
            <input type="text" class="form-control" id="inputDireccion" placeholder="Ingrese Dirreción">

        </div>

        <div class="col-6">
            <label for="inputCelular" class= "form-label">Celular:</label>
            <input type="text" class="form-control" id="inputCelular" placeholder="Numero De Celular">

        </div>

        <div class="col-6 mt-3">
            <label for="inputCiudad" class= "form-label">Ciudad:</label>
            <select id="imputCiudad" class= "from-select">
            <option selected>Motupe</option>
            <option>Olmos</option>
            <option>Chanchaque</option>
            <option>Piura</option>
            </select>

        </div>
        <div class="col-12">
            <div class="form-check">
            <input type="checkbox" class="form-check-imput" id="checkAceptar">
            <label for="checkAceptar" class= "form-check-label">Aceptar Terminos:</label>
        </div>
        </div>
        <div class="col-12">
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Dominio De Excel</label>
        </div>
        <div class="col-12">
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Base De Datos</label>
        </div>
        <div class="col-12">
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Programación</label>
        </div>

        </div>

        <div class="col-12">
        <input type="button" value="REGISTRARSE"/>
        </div>
        </div>
    </form>
   </DIV> 
   <HEader>
        <?php
        include('includes/pie.php')
        ?>
    </HEader>
</body>
</html>