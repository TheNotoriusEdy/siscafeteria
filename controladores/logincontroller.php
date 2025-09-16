


?>
<?php

require_once __DIR__ . '/../bd/bd.php';

class LoginController {
	public function validarFormulario($usuario, $password) {
		$errores = [];
		if (empty($usuario)) {
			$errores[] = 'El usuario es obligatorio.';
		}
		if (empty($password)) {
			$errores[] = 'La contraseña es obligatoria.';
		}
		return $errores;
	}

	public function verificarLogin($usuario, $password) {
		global $conn;
		$stmt = $conn->prepare("SELECT password, rol_id FROM usuarios WHERE usuario = ?");
		$stmt->bind_param("s", $usuario);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($result->num_rows === 1) {
			$row = $result->fetch_assoc();
			// Si usas password_hash, cambia a password_verify
			if ($row['password'] === $password) {
				return ['success' => true, 'rol_id' => $row['rol_id']];
			} else {
				return ['success' => false, 'error' => 'Contraseña incorrecta'];
			}
		} else {
			return ['success' => false, 'error' => 'Usuario no encontrado'];
		}
	}
}

// Ejemplo de uso:
// $controller = new LoginController();
// $errores = $controller->validarFormulario($_POST['usuario'], $_POST['password']);
// if (count($errores) === 0) {
//     $login = $controller->verificarLogin($_POST['usuario'], $_POST['password']);
//     if ($login['success']) { /* login correcto */ } else { /* mostrar error */ }
// }
?>