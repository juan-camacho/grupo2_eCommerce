<?php
  require_once 'form.php';

  function validateForm() {
    if ( !checkLength(old('name'), 2) ) {
      addError('name', 'Debes escribir un nombre.');
    }
    if ( !checkLength(old('lastname'), 2) ) {
      addError('lastname', 'Debes escribir un apellido.');
    }

    if ( !checkEmail(old('email'))) {
      addError('email', 'Debes escribir un email válido.');
    }

    if ( !checkpass(old('password'))) {
        addError('password', 'La Contraseña debe tener Una mayuscula, una minuscula, un numero y mayor de 6 digitos.');
    }

    if ( !checkMatch(old('password'), old('password2'))) {
      addError('password', 'Las contraseñas no coinciden.');
    }
  }
?>
