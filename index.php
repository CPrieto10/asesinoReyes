<?php
require 'conexion.php';
$libros = $pdo->query('SELECT * FROM libros')->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Crónica del Asesino de Reyes</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Lora&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<header class="parallax parallax-header">
  <h1 class="fade-in">Crónica del Asesino de Reyes</h1>
  <p class="fade-in">Una saga de Patrick Rothfuss</p>
</header>

<section class="autor-section">
  <h2>Sobre el autor</h2>
  <p>Patrick Rothfuss es un autor estadounidense conocido por su estilo narrativo poético y su universo complejo. Su obra más famosa es la trilogía de "Crónica del Asesino de Reyes".</p>
</section>

<section class="libros-section">
  <?php foreach ($libros as $libro): ?>
  <article class="libro-card slide-in">
    <img src="<?= htmlspecialchars($libro['portada']) ?>" alt="<?= htmlspecialchars($libro['titulo']) ?>" />
    <h3><?= htmlspecialchars($libro['titulo']) ?></h3>
    <p><?= htmlspecialchars($libro['descripcion']) ?></p>
  </article>
  <?php endforeach; ?>
</section>

<footer class="parallax parallax-footer">
  <p>© 2025 Carlos Prieto | Proyecto educativo | <a href="aviso.php" class = "link-legal">Aviso legal y política de privacidad</a> | 
  <a href="https://github.com/CPrieto10" target="_blank" class="github-link" title="Mi GitHub">
      <img src="imagenes/github-icon.png" alt="GitHub" class="github-icon">
    </a>
  </p>
</footer>

</body>
</html>
