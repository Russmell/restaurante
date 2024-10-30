<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

try {
    $mongoClient = new MongoDB\Client("mongodb+srv://admin:pKKi5ms4ebx1Cu9p@cluster0.6zvbf.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
    $database = $mongoClient->selectDatabase('restaurante');
    $clientesCollection = $database->selectCollection('clientes'); 

} catch (Exception $e) {
    die("Error al conectar con MongoDB: " . $e->getMessage());
}
?>
