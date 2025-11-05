<?php
<<<<<<< HEAD

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
if(isset($_GET['id'])){
    //Borrar id
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);

}
header("Location: selectall.php");
exit();
=======
// Página de prueba. Se debe eliminar de producción. 
require_once '../vendor/autoload.php';

require_once 'conexion.php';


//echo "Conexión correcta";


// Consulta SQL o manipulación del a base de datos.
if (isset($_GET['id'])) {
    // Borrar el id
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);
}

// Vuelve a mostrar la tabla
header('Location: selectall.php');
exit();
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
