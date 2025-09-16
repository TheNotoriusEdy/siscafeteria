<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Pedidos Cafetería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>

<!-- Login -->
<div class="login-container">
  <h2>Iniciar Sesión</h2>
  <form method="POST" action="">
    <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
    </div>
    <button type="submit" class="btn btn-login">Ingresar</button>
  </form>
</div>

<!-- Dashboard (después del login) -->
<div class="dashboard" style="display:none;">
  <header class="dashboard-header">
    <h1>Pedidos Cafetería</h1>
    <nav class="dashboard-menu">
      <a href="#">Menú</a>
      <a href="#">Carrito</a>
      <a href="#">Historial</a>
      <a href="#">Cerrar Sesión</a>
    </nav>
  </header>

  <main class="container my-5">
    <!-- Menú Productos -->
    <section class="row g-4">
      <div class="col-md-4">
        <div class="menu-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfjQL3zlwTXbpSxkFJjubdFqgxnaB8PmtrOg&s" alt="Producto">
          <h4>Cafe capuchino</h4>
          <p>Descripción breve del producto.</p>
          <button class="btn-pedido">Agregar</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="menu-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT82Rk8x-svSJHtPmLUhYmH-jXoDtXcOfJ7Xg&s" alt="Producto">
          <h4>Coffe latte</h4>
          <p>Descripción breve del producto.</p>
          <button class="btn-pedido">Agregar</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="menu-item">
          <img src="https://excelso77.com/wp-content/uploads/2024/05/por-que-el-cafe-americano-se-llama-asi-te-lo-contamos.webp" alt="Producto">
          <h4>Cafe Americano</h4>
          <p>Descripción breve del producto.</p>
          <button class="btn-pedido">Agregar</button>
        </div>
      </div>
    </section>

    <!-- Carrito de pedidos -->
    <section class="cart">
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
            <td>Producto</td>
            <td>1</td>
            <td>$0.00</td>
            <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
          </tr>
        </tbody>
      </table>
      <p>Total: $0.00</p>
      <button class="btn btn-success">Finalizar Pedido</button>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Cafetería. Todos los derechos reservados.</p>
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


