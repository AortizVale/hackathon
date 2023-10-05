<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Ingreso de pacientes</title>
</head>

<body>
    <ul class="nav justify-content-center fondo-azul">
        <li class="nav-item">
            <div class="container-fluid ">
                <a class="navbar-brand center" href="#">
                    <img src="img/logo-dark-omimed-2x.webp" alt="logo" width="250">
                </a>
            </div>
        </li>
    </ul>
    <br>
    <div>
        <h2>Registro de pacientes</h2>
    </div>

    <form action="connect.php" method="POST">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <label for="nombres">Nombres:</label><br>
                    <input type="text" name="nombres" id="nombres" required /><br><br>
                </div>
                <div class="col">
                <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" id="apellidos" required /><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="form-group col-md-4">
            <label for="tipo_doc">Tipo doc:</label><br>
            <select id="tipo_doc" class="form-control" name="tipo_doc">
                <option selected>C.C.</option>
                <option>T.I.</option>
                <option>R.C.</option>
                <option>Pasaporte</option>
            </select>
        </div>
                </div>
                <div class="col">
                <label for="num_doc">Num doc:</label><br>
        <input type="text" name="num_doc" id="num_doc" required /><br><br>
                </div>

            </div>
        </div>



        

        

       

        <label for="direccion">Dirección:</label><br>
        <input type="text" name="direccion" id="direccion" required /><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required /><br><br>

        <label for="celular">Celular:</label><br>
        <input type="text" name="celular" id="celular" required /><br><br>

        <label for="hora_cita">Hora de la cita:</label><br>
        <input type="time" name="hora_cita" id="hora_cita" required /><br><br>

        <div class="form-group col-md-4">
            <label for="consultorio">Consultorio:</label><br>
            <select id="consultorio" class="form-control" name="consultorio">
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>Terapias</option>
            </select>
        </div>

        <input type="submit" name="submit" id="submit" />



    </form>
</body>

</html>