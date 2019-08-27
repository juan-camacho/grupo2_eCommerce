<?php
class BD extends PDO
{
public static $HOST = 'localhost';
public static $NAME;
public static $USER;
public static $PASS;
public static $PORT = 3306;
private static $instance;
private function __construct() {}
public static function getInstance()
    {
        if (!self->$instance) {
            $pdo = new parent('mysql:host'. self::$HOST .';dbname=' . seft::$NAME, seft::$USER, seft::$PASS);
        }
return $this->instance;
    }
}
BD::$NAME = 'ecommerce';
BD::$USER = 'root';
BD::$PASS = '';
?>
