<?php

  // Sube la imagen y nos devuelve su nuevo nombre.
  function subirArchivo($file, $dir, $prefix = '') {

    // Tomamos los datos originales de la imagen.
    $viejoPath = $file["tmp_name"];
    $viejoName = $file["name"];
    $extension = pathinfo($viejoName, PATHINFO_EXTENSION);

    // Formamos el nuevo nombre y el nuevo path a donde quedará guardada.
    $nuevoNombre = uniqid($prefix) . "." . $extension;
    $nuevoPath = $dir . $nuevoNombre;

    // Guardamos la imagen en su path final y la agregamos al array de usuario.
    move_uploaded_file($viejoPath, $nuevoPath);

    return $nuevoNombre;
  }

?>
