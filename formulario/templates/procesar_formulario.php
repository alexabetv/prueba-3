<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $direcc = $_POST['direcc'];
    $email = $_POST['email'];
    $fono = $_POST['fono'];
    $admin = isset($_POST['admin']) ? 1 : 0;

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "usuario";
    $password = "contraseña";
    $dbname = "clientes_db";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar datos en la tabla
    $sql = "INSERT INTO clientes (rut, nombre, apellido_paterno, apellido_materno, direccion, email, telefono, admin)
            VALUES ('$rut', '$nombreUser', '$apellido_paterno', '$apellido_materno', '$direcc', '$email', '$fono', '$admin')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>
