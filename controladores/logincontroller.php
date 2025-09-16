<?php
require_once 'bd/bd.php';

function validar_login($usuario, $password) {
    global $conn;
    $error = '';
    $login_exitoso = false;
    if ($usuario && $password) {
        $stmt = $conn->prepare('SELECT id, usuario, password, nombre, rol_id FROM usuarios WHERE usuario = ?');
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            // Si la contraseña está hasheada, usar password_verify
            if ($password === $row['password'] || password_verify($password, $row['password'])) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['rol_id'] = $row['rol_id'];
                $_SESSION['id'] = $row['id'];
                $login_exitoso = true;
            } else {
                $error = 'Contraseña incorrecta.';
            }
        } else {
            $error = 'Usuario no encontrado.';
        }
        $stmt->close();
    } else {
        $error = 'Por favor ingresa usuario y contraseña.';
    }
    return [
        'login_exitoso' => $login_exitoso,
        'error' => $error
    ];
}
?>