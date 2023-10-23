<?php
class conexion{
    public static function conectar(){

// Configuración de la base de datos
$DB_HOST="localhost";
$DB_NAME="inventario_db";
$DB_USER="root";
$DB_PASS="";

// Intenta establecer la conexión con la base de datos
try {
    $conexion = new PDO(
        'mysql:host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf8mb4',
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Error al conectarse a la base de datos: " . $e->getMessage());
}
    }
}
