<?php

$host = 'localhost';
$user = 'root';
$db = 'sistema-escolar';
$pass = '';

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error al conectar a la base de datos: ' . $e->getMessage();
    die(); // Detiene la ejecución del script si hay un error en la conexión a la base de datos
}

// El resto del código relacionado con la base de datos y la lógica de la aplicación iría aquí

?>