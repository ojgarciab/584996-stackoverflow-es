<?php
$fila['id'] = $documento_seleccionado = "1020";
$fila['nombre'] = $nombre = '<Nombre extraño> ¡Sí!';
?><!doctype html>
<html lang="es">
  <head>
    <!-- Meta tags requeridos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pruebas</title>
  </head>
  <body style="padding-top: 2rem;">
    <a href="mostrar_notarias.php?<?= http_build_query([
      'documento_seleccionado' => $documento_seleccionado,
      'nombre' => $nombre,
    ], '', '&amp;') ?>">Continuar</a>
    <td>
      <a href="mostrar_horas.php?<?= http_build_query([
          'documento_seleccionado' => $fila['id'],
          'nombre' => $fila['nombre'],
          'notaria_seleccionada' => $fila['id'],
      ], '', '&amp;') ?>" class="btn btn-outline-warning">
          <h6>Continuar</h6>
      </a>
    </td>
  </body>
</html>