<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_register"])) {
    // Conexión a la base de datos (cambia los valores según tu configuración)
    $servername = "bhqherqffrpus0bap7qx-mysql.services.clever-cloud.com:21747";
    $username = "udvmhc33gva54ot1";
    $password = "HO8e0SD1SWSz3GRF7pR";
    $dbname = "bhqherqffrpus0bap7qx";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Recuperar datos del formulario
    $fullname = htmlspecialchars($_POST["fullname"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    $zipcode = htmlspecialchars($_POST["zip_code"]);
    $email = htmlspecialchars($_POST["email"]);
    $username = htmlspecialchars($_POST["username"]);

    // Validar contraseñas
    if ($_POST["password"] !== $_POST["re_password"]) {
        die("Las contraseñas no coinciden. Vuelve atrás e inténtalo de nuevo.");
    }

    // Check if the username already exists
    $checkUsernameQuery = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmtCheckUsername = $conn->prepare($checkUsernameQuery);
    $stmtCheckUsername->bind_param("s", $username);
    $stmtCheckUsername->execute();
    $resultCheckUsername = $stmtCheckUsername->get_result();

    if ($resultCheckUsername->num_rows > 0) {
        // El usuario ya existe
        header("Location: existe");
    } else {
        // Fecha de expiración de la licencia (30 días desde la activación)
        $expiration_date = date('Y-m-d H:i:s', strtotime('+30 days'));

        // Estado de la cuenta (0: deshabilitada, 1: habilitada)
        $account_status = 0;

        // Fecha de creación de la cuenta
        $creation_date = date('Y-m-d H:i:s');

        // Preparar la consulta SQL con parámetros preparados
        $sql = "INSERT INTO usuarios (nombrecompleto, telefono, Address, zipcode, email, usuario, contrasena, expirationdate, accountstatus, creationdate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Verificar la preparación de la consulta
        if (!$stmt) {
            die("Error al preparar la consulta: " . $conn->error);
        }

        // Vincular los parámetros y ejecutar la consulta
        $stmt->bind_param("ssssssssis", $fullname, $phone, $address, $zipcode, $email, $username, $_POST["password"], $expiration_date, $account_status, $creation_date);
        $stmt->execute();

        // Verificar el resultado de la ejecución
        if ($stmt->affected_rows > 0) {
            // Éxito: Mostrar un mensaje indicando que la cuenta se creó con éxito y debe ser activada por un administrador
            header("Location: exitoso");
            // Programar la eliminación de la cuenta después de 24 horas
            scheduleAccountDeletion($username, $creation_date, $conn);
        } else {
            // Error: Mostrar mensaje de error o redirigir a una página de error
            echo "Error al registrar el usuario. Vuelve atrás e inténtalo de nuevo.";
        }

        // Cerrar la conexión y liberar recursos
        $stmt->close();
    }

    // Cerrar la conexión y liberar recursos
    $stmtCheckUsername->close();
    $conn->close();
} else {
    // Si alguien intenta acceder directamente a este archivo sin enviar el formulario, redirigirlo a la página de registro
    header("Location: registro");
    exit();
}

// Función para programar la eliminación de la cuenta después de 24 horas
function scheduleAccountDeletion($username, $creation_date, $conn) {
    // Obtener la fecha actual y agregar 24 horas
    $deletion_time = date('Y-m-d H:i:s', strtotime('+24 hours'));

    // Preparar la consulta SQL para actualizar la fecha de eliminación
    $sql = "UPDATE usuarios SET deletiontime = ? WHERE usuario = ?";
    $stmt = $conn->prepare($sql);

    // Verificar la preparación de la consulta
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Vincular los parámetros y ejecutar la consulta
    $stmt->bind_param("ss", $deletion_time, $username);
    $stmt->execute();

    // Verificar el resultado de la ejecución
    if ($stmt->affected_rows > 0) {
        // Éxito: La fecha de eliminación se ha programado correctamente
        echo "La cuenta será eliminada si no se activa en 24 horas.";
    } else {
        // Error: Mostrar mensaje de error o manejar de acuerdo a tus necesidades
        echo "Error al programar la eliminación de la cuenta.";
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
}
?>
