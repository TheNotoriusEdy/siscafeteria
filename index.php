<?php
require_once 'bd/bd.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Cafetería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link href="css/index.css" rel="stylesheet"> 
</head>
<body>

<!-- Login elegante -->
<div class="login-container">
  <h2>Iniciar Sesión</h2>
  <form>
    <div class="mb-3">
      <label for="usuario" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu usuario">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
    </div>
    <button type="submit" class="btn btn-login">Ingresar</button>
  </form>
  <div class="register-link">
    <p>¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
  </div>
</div>

<!-- Dashboard elegante -->
<div class="dashboard" style="display:none;">
  <header class="dashboard-header">
    <h1>Cafetería Online</h1>
    <nav class="dashboard-menu">
      <a href="#">Inicio</a>
      <a href="#">Menú</a>
      <a href="#">Pedidos</a>
      <a href="#">Cerrar Sesión</a>
    </nav>
  </header>

  <main class="container my-5">
    <section class="row g-4">
      <div class="col-md-4">
        <div class="menu-item">
          <img src="https://cdn7.kiwilimon.com/recetaimagen/36986/640x640/46349.jpg.webp" alt="Café Latte">
          <div class="p-3">
            <h4>Café Latte</h4>
            <p>Delicioso café con leche y espuma cremosa.</p>
            <button class="btn-pedido">Agregar al pedido</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="menu-item">
          <img src="https://excelso77.com/wp-content/uploads/2024/05/por-que-el-cafe-americano-se-llama-asi-te-lo-contamos.webp" alt="Café Americano">
          <div class="p-3">
            <h4>Café Americano</h4>
            <p>Café negro puro con sabor intenso y aromático.</p>
            <button class="btn-pedido">Agregar al pedido</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="menu-item">
          <img src="https://media.istockphoto.com/id/505168330/es/foto/taza-de-caf%C3%A9-con-granos-de-caf%C3%A9-con-leche-y-varillas-de-canela.jpg?s=612x612&w=0&k=20&c=ud_g_RyWoPSEJ4_KkpsQfFuWh3iVPlyiTHqpu69ayEg=" alt="Capuchino">
          <div class="p-3">
            <h4>Capuchino</h4>
            <p>Café espresso con espuma de leche y cacao espolvoreado.</p>
            <button class="btn-pedido">Agregar al pedido</button>
          </div>
        </div>
      </div>
    </section>

    <section class="cart mt-5">
      <h3>Carrito de pedidos</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Café Latte</td>
            <td>1</td>
            <td>$3.50</td>
            <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
          </tr>
        </tbody>
      </table>
      <p>Total: $3.50</p>
      <button class="btn btn-success">Finalizar Pedido</button>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Cafetería Online. Todos los derechos reservados.</p>
  </footer>
</div>

<script>
  // Mostrar dashboard al hacer login (solo diseño)
  const loginForm = document.querySelector('.login-container form');
  const loginContainer = document.querySelector('.login-container');
  const dashboard = document.querySelector('.dashboard');

  loginForm.addEventListener('submit', function(e){
    e.preventDefault();
    loginContainer.style.display = 'none';
    dashboard.style.display = 'block';
  });
</script>

</body>
</html>

