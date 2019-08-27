<?php
// Helpers de formularios, si estuviéramos usando objetos, ésta sería una clase
// abstracta.
$errors = [];

// Devuelve el valor de un campo o un string vacío
function old($field) {
  return $_REQUEST[$field] ?? '';
}

// Compara ambos valores y devuelve el string 'selected' en caso de que sean iguales
function selected($value, $optionValue) {
  return $value == $optionValue ? 'selected' : '';
}

// Verifica si el campo está dentro de la longitud solicitada,
// más de 8 caracteres por defecto
function checkLength($string, $min = 8, $max = NULL) {
  if ($max) {
    return strlen($string) >= $min && strlen($string) <= $max;
  }
  return strlen($string) >= $min;
}

function checkEmail($string) {
  return filter_var($string, FILTER_VALIDATE_EMAIL);
}

function checkMatch($string1, $string2) {
  return $string1 === $string2;
}


// Manejo de errores

// Usar global es una mala práctica, pero sin objetos no hay muchas otras opciones
function addError($field, $message) {
  global $errors;
  $errors[$field] = $message;
}

function hasError($field) {
  global $errors;
  return isset($errors[$field]);
}

function getError($field) {
  global $errors;
  return $errors[$field] ?? '';
}

function isValid() {
  global $errors;
  return empty($errors);
}
?>
