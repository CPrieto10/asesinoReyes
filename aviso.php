<?php
require_once 'conexion_bd/conexion.php';

try {
    $stmt = $pdo->query("SELECT titulo, contenido FROM info_legal WHERE id = 1");
    $legal = $stmt->fetch();
} catch (PDOException $e) {
    echo "Error al consultar la base de datos: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Aviso legal</title>
  <link rel="stylesheet" href="css/legal.css">
</head>
<body>
  <div class="caja">
    <?php if ($legal): ?>
      <h1><?= htmlspecialchars($legal['titulo']) ?></h1>
      <p><?= nl2br(htmlspecialchars($legal['contenido'])) ?></p>
    <?php else: ?>
      <h1>Contenido no disponible</h1>
      <p>No se encontró el aviso legal en la base de datos.</p>
    <?php endif; ?>
  </div>
</body>
</html>

