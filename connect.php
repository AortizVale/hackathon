<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $conn = mysqli_connect('localhost', 'root', '', 'test1') or die("Connectionn Failed:" . mysqli_connect_error());
    if (isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['tipo_doc']) && isset($_POST['num_doc']) && isset($_POST['direccion']) && isset($_POST['email']) && isset($_POST['celular']) && isset($_POST['hora_cita']) && isset($_POST['consultorio']) && isset($_POST['prioridad'])) {

        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $tipo_doc = $_POST['tipo_doc'];
        $num_doc = $_POST['num_doc'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $hora_cita = $_POST['hora_cita'];
        $consultorio = $_POST['consultorio'];
        $prioridad = $_POST['prioridad'];

        $sql = "INSERT INTO pacientes (nombres, apellidos, tipo_doc, num_doc, direccion, email, celular, fecha_creado, hora_cita, consultorio, prioridad) VALUES ('$nombres', '$apellidos', '$tipo_doc', '$num_doc', '$direccion', '$email', '$celular', NOW(), '$hora_cita', '$consultorio', '$prioridad')";

        $query = mysqli_query($conn, $sql);
        if ($query) {

            echo "<script>
        alert('Usuario registrado');
        window.location.href='secretaria.php';
            </script>";
        } else {
            echo "<script>
        alert('Ocurrió un error');
        window.location.href='secretaria.php';
            </script>";
        }
    }
}
