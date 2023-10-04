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
                        <tr class="table-success">
                            <td>Paulina Ortega</td>
                            <td>Consultorio 5</td>
                            <td>Antonio Díaz</td>
                        </tr>
                        <tr>
                            <td>Nelson Jaimes</td>
                            <td>Consultorio 6</td>
                            <td>Sandra Sarmiento</td>
                        </tr>
                        <tr>
                            <td>Juan García</td>
                            <td>Terapia</td>
                            <td>Ana Rodríguez</td>
                        </tr>
                        <tr>
                            <td>Carlos Pérez</td>
                            <td>Consultorio 2</td>
                            <td>Laura Martínez</td>
                        </tr>
                        <tr>
                            <td>Isabel Silva</td>
                            <td>Consultorio 3</td>
                            <td>Diego Fernández</td>
                        </tr>
                        <tr>
                            <td>Pedro Sánchez</td>
                            <td>Consultorio 1</td>
                            <td>María López</td>
                        </tr>
                        <tr>
                            <td>Alejandro González</td>
                            <td>Consultorio 4</td>
                            <td>Andrea Fernández</td>
                        </tr>
                        <tr>
                            <td>Luis Torres</td>
                            <td>Consultorio 7</td>
                            <td>Elena Ramírez</td>
                        </tr>
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