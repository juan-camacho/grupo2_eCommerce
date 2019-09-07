<?php
  require_once 'form.php';

  function validateForm() {
    // Queda para cuando haya tabla de familias
    // if ( !old('familia_id') ) {
    //   addError('familia_id', 'Debes elegir una familia para este componente.');
    // }

    if ( !checkLength(old('unidad'), 3) ) {
      addError('unidad', 'Debes escribir una unidad de al menos 3 letras.');
    }

    // Acá tuve que convertir el valor a integer antes de poder verificar si está
    // entre X e Y
    if ( !checkIntBetween((int)old('temperatura'), 2700, 4000) ) {
      addError('temperatura', 'La temperatura debe ser un número entre 2700 y 4000° (Grados Kalvin).');
    }

    // Queda validar la imagen
  }
?>
