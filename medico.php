<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Llamado a pacientes</title>

</head>

<body class="fondo-gris">



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
    <br>
    <div class='container-text-center'>
        <div class='row'>
            <div class='col'>
                Paciente
                <br>
            </div>
            <div class='col'>
                Hora
                <br>
            </div>
            <div class='col'>
                Prioridad
                <br>
            </div>
            <div class='col'>
                Llamar
                <br>
            </div>
            <div class='col'>
                Quitar
                <br>
            </div>
        </div>
        <br>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'test1') or die("Connectionn Failed:" . mysqli_connect_error());
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql_prioridad = "SELECT nombres, apellidos, consultorio, hora_cita, prioridad, estado FROM pacientes ORDER BY prioridad = 'No prioritario', hora_cita";
        $result = $conn->query($sql_prioridad);

        

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $containerClass = ( $row["prioridad"] == "No prioritario") ? 'container-text-center' : 'container-text-center-prioritario';
                echo "<div class='$containerClass'>
                    <div class='row'>
                    <div class='col'>
                        " . $row["nombres"] . " " . $row["apellidos"] . "
                    </div>
                    <div class='col'>
                        " . $row["hora_cita"] . "
                    </div>
                    <div class='col'>
                        " . $row["prioridad"] . "
                    </div>
                    <div class='col'>
                        <button type='button' class='btn btn-success'>Llamar</button>
                    </div>
                    <div class='col'>
                        <button type='button' class='btn btn-danger'>Quitar</button>
                    </div>
                    </div>
                    </div>
                    <br>";
                
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>





        <img class="soporteimagen" src="img/soporte.png" alt="soporteimagen">

</body>

</html>