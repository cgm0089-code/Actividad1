<?php
$host = 'db';
$dbname = 'appdb';
$user = 'appuser';
$password = 'apppassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Conexion exitosa a MySQL desde PHP</h1>";

    $pdo->exec("CREATE TABLE IF NOT EXISTS mensajes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(255),
        creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    $pdo->exec("INSERT INTO mensajes (texto) VALUES ('Hola desde PHP + Docker')");

    $stmt = $pdo->query("SELECT * FROM mensajes");
    echo "<ul>";
    foreach ($stmt as $row) {
        echo "<li>#{$row['id']}: {$row['texto']} ({$row['creado_en']})</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "Error de conexion: " . $e->getMessage();
}
