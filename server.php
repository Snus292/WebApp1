<<<<<<< HEAD
<?php
$_POST = json_decode( file_get_contents("php://input"),true);
=======
<?php
$_POST = json_decode( file_get_contents("php://input"),true);
>>>>>>> 61070fc (Исправленный ошибки и скоректирована 3 часть)
echo var_dump($_POST);