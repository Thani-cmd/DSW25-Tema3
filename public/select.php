<?php

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

//Leer variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$charset = $_ENV['DB_CHARSET'];

//Hacer la conexion a la BD.
// Data source Name  (DSN)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";


$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
$pdo = new PDO($dsn, $user, $password);

}catch(PDOException $e){
    echo "<h1>Error en la conexion</h1>";
    printf("<p>%s</p>", $e->getMessage());
    die();
}

//Consulta sql o manipulacion o manipulacion de la base de datos.

//Usuario por id
$userId = '2';

$sql = "SELECT id, name, email, register_date FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->execute(['id' => $userId]);  

$user = $stmt->fetch();

echo "<pre>";
print_r($user);
echo "</pre>";

printf('<p>ID: %s</p>', $user['id']);
printf('<p>Nombre: %s</p>', $user['name']);
printf('<p>Email: %s</p>', $user['email']);
printf('<p>Fecha registro: %s</p>', $user['register_date']);


//Desconexion
$stmt = null;
$pdo = null;

?>

