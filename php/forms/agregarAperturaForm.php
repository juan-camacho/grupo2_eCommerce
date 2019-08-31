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
    if ( !checkIntBetween((int)old('angulo'), 5, 180) ) {
      addError('angulo', 'El ángulo debe ser un número entre 5 y 180.');
    }

    // Queda validar la imagen
  }
?>
