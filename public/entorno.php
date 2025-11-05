<?php
<<<<<<< HEAD
=======
// Página de prueba. Se debe eliminar de producción. 
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

echo "<pre>";
print_r($_ENV);
echo "</pre>";
<<<<<<< HEAD
printf('<p>Base de datos: %s</p>'. $_ENV['DB_NAME']);

?>
=======
printf('<p>Base de datos: %s</p>', $_ENV['DB_NAME']);
>>>>>>> f7f0248c8e40a844abfcb9d9d135d49dce7173d0
