<?php
  require_once 'form.php';

  function validateForm() {
    // Queda para cuando haya tabla de familias
    // if ( !old('familia_id') ) {
    //   addError('familia_id', 'Debes elegir una familia para este componente.');
    // }

    if ( !checkLength(old('nombre'), 3) ) {
      addError('nombre', 'Debes escribir un nombre de al menos 3 letras.');
    }

    // Acá tuve que convertir el valor a integer antes de poder verificar si está
    // entre X e Y
    if ( !checkIntBetween((int)old('dimension'), 1, 360) ) {
      addError('dimension', 'La dimension debe ser un número entre 1 y 360.');
    }

    // Queda validar la imagen
  }
?>
