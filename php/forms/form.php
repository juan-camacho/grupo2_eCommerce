<?php
// Helpers de formularios, si estuviéramos usando objetos, ésta sería una clase
// abstracta.
$errors = [];

// Devuelve el valor de un campo o un string vacío
function old($field, $default = '') {
  return $_REQUEST[$field] ?? $default;
}

// Compara ambos valores y devuelve el string 'selected' en caso de que sean iguales
function selected($value, $optionValue) {
  return $value == $optionValue ? 'selected' : '';
}

// Verifica si el campo está dentro de la longitud solicitada,
// más de 8 caracteres por defecto
function checkLength($string, $min = 2, $max = NULL) {
  if ($max) {
    return strlen($string) >= $min && strlen($string) <= $max;
  }
  return strlen($string) >= $min;
}

function checkIntBetween($number, $min, $max) {
  return is_int((int)$number) && $number >= $min && $number <= $max;
}

function checkEmail($string) {
  return filter_var($string, FILTER_VALIDATE_EMAIL);
}
function checkpass($string){
$uppercase = preg_match('@[A-Z]@', $string);
$lowercase = preg_match('@[a-z]@', $string);
$number    = preg_match('@[0-9]@', $string);
 return strlen($string) > 6 && ($uppercase && ($lowercase && $number));
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
