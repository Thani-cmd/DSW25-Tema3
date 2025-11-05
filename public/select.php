<?php
<<<<<<< HEAD
=======
// Página de prueba. Se debe eliminar de producción. 
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

<<<<<<< HEAD
//Leer variables de entorno
=======
// Leer variables de entono

>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$host = $_ENV['DB_HOST'];
<<<<<<< HEAD
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$charset = $_ENV['DB_CHARSET'];

//Hacer la conexion a la BD.
// Data source Name  (DSN)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

=======
//$host = '127.0.0.1';
$db = $_ENV['DB_NAME'];
//$db = 'tabla';
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
//$password = '1234';
$charset = $_ENV['DB_CHARSET'];

// Hacer la conexión a la BD. 
// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
<<<<<<< HEAD
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
$pdo = new PDO($dsn, $user, $password);

}catch(PDOException $e){
    echo "<h1>Error en la conexion</h1>";
=======
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

} catch (PDOException $e) {
    echo "<h1>Error en la conexión</h1>";
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
    printf("<p>%s</p>", $e->getMessage());
    die();
}

<<<<<<< HEAD
//Consulta sql o manipulacion o manipulacion de la base de datos.

//Usuario por id
=======
//echo "Conexión correcta";


// Consulta SQL o manipulación del a base de datos.

// Usuario por ID.
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
$userId = '2';

$sql = "SELECT id, name, email, register_date FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);

<<<<<<< HEAD
$stmt->execute(['id' => $userId]);  
=======
$stmt->execute(['id' => $userId]);
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0

$user = $stmt->fetch();

echo "<pre>";
print_r($user);
echo "</pre>";
<<<<<<< HEAD

printf('<p>ID: %s</p>', $user['id']);
=======
printf('<p>Id: %s</p>', $user['id']);
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
printf('<p>Nombre: %s</p>', $user['name']);
printf('<p>Email: %s</p>', $user['email']);
printf('<p>Fecha registro: %s</p>', $user['register_date']);

<<<<<<< HEAD

//Desconexion
$stmt = null;
$pdo = null;

?>

=======
// Desconexión
$stmt = null;
$pdo = null;
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
