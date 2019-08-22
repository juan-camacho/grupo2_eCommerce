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
BD::$NAME = 'ideadb';
BD::$USER = 'root';
BD::$PASS = '';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php  $conn = getInstance(1);
        var_dump($conn);
        ?>
    </body>
</html>
