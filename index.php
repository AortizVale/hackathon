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

<body class="fondo-azul-oscuro">
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
    <div class="container">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'test1') or die("Connectionn Failed:" . mysqli_connect_error());
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql_prioridad = "SELECT nombres, apellidos, consultorio, hora_cita, prioridad, estado FROM pacientes WHERE estado =0 ORDER BY prioridad = 'No prioritario', hora_cita";
        $result = $conn->query($sql_prioridad);
        ?>



        <div class="row">

            <div class="col-md-7">
                <table class="table table-striped ">
                    <thead>
                        <tr class="crecer-letra">
                            <th scope="col">Paciente</th>
                            <th scope="col">Consultorio</th>
                            <th scope="col">Médico</th>
                        </tr>
                    </thead>
                    <tbody class="crecer-uno">
                        <?php
                        if ($result->num_rows > 0) {
                            $POSICION=0;
                             while ($row = $result->fetch_assoc()) {
                                $POSICION++;
                        echo"<tr class='table-success'>
                            <td>" . $row["nombres"]. " ". $row["apellidos"] . "</td>
                            <td>" . $row["consultorio"] . "</td>
                            <td>" . $POSICION . "</td>
                            
                        </tr>";
                             }}
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/AAOS-Infographic.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/infografia.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/viruelaMono.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>