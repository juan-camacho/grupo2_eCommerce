<?php
  require_once 'form.php';

  function validateForm() {
    if ( !checkLength(old('nombre'), 2) ) {
      addError('nombre', 'Debes escribir un nombre.');
    }
    if ( !checkLength(old('apellido'), 2) ) {
      addError('apellido', 'Debes escribir un apellido.');
    }

    if ( !checkEmail(old('email')) ) {
      addError('email', 'Debes escribir un email válido.');
    }

    if ( !checkLength(old('pass'))) {
      addError('pass', 'La contraseña debe tener al menos, 8 caracteres.');
    }

    if ( !checkMatch(old('pass'), old('repass')) ) {
      addError('pass', 'Las contraseñas no coinciden.');
    }
  }
?>
