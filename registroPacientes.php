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
    <!-- Encabezado con logotipo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo-dark-omimed-2x.webp" alt="logo" width="250">
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Registro de Pacientes</h2>

        <!-- Formulario de registro -->
        <form action="connect.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo_doc">Tipo de Documento:</label>
                        <select class="form-control" id="tipo_doc" name="tipo_doc">
                            <option selected>C.C.</option>
                            <option>T.I.</option>
                            <option>R.C.</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="num_doc">Número de Documento:</label>
                        <input type="text" class="form-control" id="num_doc" name="num_doc" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                        <label for="direccion">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="celular">Celular:</label>
                        <input type="text" class="form-control" id="celular" name="celular" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hora_cita">Hora de la cita:</label>
                        <input type="time" class="form-control" id="hora_cita" name="hora_cita" required>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="consultorio">Consultorio:</label>
                        <select class="form-control" id="consultorio" name="consultorio">
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
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="prioridad">Prioridad:</label>
                        <select class="form-control" id="prioridad" name="prioridad">
                            <option selected>No prioritario</option>
                            <option>Adulto Mayor</option>
                            <option>Discapacitado</option>
                            <option>Embarazada</option>
                            <option>Niño en brazos</option>
                        </select>
                    </div>
                </div>
            </div>


            <br>
            <button type="Cancel" class="btn btn-danger"> Cancelar</button>
            <button type="submit" class="btn btn-success" id="registro-paciente"  name="registro-paciente">Registrar</button>
        </form>
    </div>

    <!-- Agrega aquí tus scripts JS si es necesario -->

</body>

</html>