<!doctype html>
<html lang="es">
  <head>
    <!-- Meta tags requeridos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pruebas</title>
  </head>
  <body style="padding-top: 2rem;">
    <p>
        Documento seleccionado:
        <?= htmlspecialchars($_GET["documento_seleccionado"] ?? "(No se recibió nada)") ?>
    </p>
    <p>
        Nombre:
        <?= htmlspecialchars($_GET["nombre"] ?? "(No se recibió nada)") ?>
    </p>
    <p>
        Notaría seleccionada:
        <?= htmlspecialchars($_GET["notaria_seleccionada"] ?? "(No se recibió nada)") ?>
    </p>
  </body>
</html>