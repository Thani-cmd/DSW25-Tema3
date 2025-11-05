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

//Usuario por id
$userId = '2';
=======
// Tabla con todos los usuarios

require_once '../vendor/autoload.php';

require_once 'conexion.php';

// Consulta SQL o manipulación del a base de datos.
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0

$sql = "SELECT id, name, email, register_date FROM users";
$stmt = $pdo->prepare($sql);

<<<<<<< HEAD
$stmt->execute();  

$users = $stmt->fetchAll();
=======
$stmt->execute();

$users = $stmt->fetchAll();

>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
<<<<<<< HEAD
        table{
            border-collapse: collapse;
        }
        td, th{
=======
        table {
            border-collapse: collapse;
        }
        td, th {
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
            border: 1px solid blue;
            padding: 5px;
        }
    </style>
</head>
<body>
<<<<<<< HEAD
    
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
<?php
            foreach($users as $user){
                echo '<tr>';
                printf('<td>%s</td><td>%s</td><td>%s</td><td>%s</td>', 
                $user['id'],
                $user['name'],
                $user['email'],
                $user['register_date']
                );
                printf('<td><a href="delete.php?id=%s">Eliminar</a></td>',
                    $user['id']
                );
                echo '</tr>';
            }
?>

            </tbody>
        </table>

</body>
</html>


<?php
//Desconexion
$stmt = null;
$pdo = null;
?>
=======
    <p>
        <a href="create.php">Crear nuevo usuario</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($users as $user) {
        echo "<tr>";
        printf('<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>',
            $user['id'],
            $user['name'],
            $user['email'],
            $user['register_date']
        );
        echo "<td>";
        printf('<a href="edit.php?id=%s">Editar</a> | ',
             $user['id']
        );
        printf('<a href="delete.php?id=%s">Eliminar</a>',
             $user['id']
        );
        echo "</td>";
        echo "</tr>";
    }
?>
        </tbody>
    </table>
</body>
</html>
<?php

// Desconexión
$stmt = null;
$pdo = null;
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
