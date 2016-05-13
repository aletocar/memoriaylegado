<?php

header('Access-Control-Allow-Origin: *');

//nombre que yo elijo = post[nombre en que esta mandando en el html]
/*$nombreUsuario = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$contrasena = $_POST['Contrasena'];
$email = $_POST['Mail'];
$liceo = $_POST['Liceo']


$user = 'root';
$pass = '';
$db = 'ProyectoShoa';*/

$dbconn = mysqli_connect('db-proyectoshoa-v0-1.cdy0o1sedwjg.sa-east-1.rds.amazonaws.com', 'ProyectShoaAdmin', 'ProyectoShoa', 'proyectoShoa_v0_1', 3306) or die("No conecta");
//$link = mysqli_connect('localhost', $user, $pass, $db) or die("No conecta");

/*$sql = "INSERT INTO `ProyectoShoa`.`Usuarios` (`Nombre`, `Apellido` , `NombreUsuario`,`Contrasena`,`Mail`, `Liceo`) VALUES ('";
$sql = $sql.$nombre;
$sql = $sql.'\' , \'';
$sql = $sql.$apellido;
$sql = $sql.'\' , \'';
$sql = $sql.$nombreUsuario;
$sql = $sql.'\' , \'';
$sql = $sql.$contrasena;
$sql = $sql.'\' , \'';
$sql = $sql.$mail;
$sql = $sql.'\' , \'';
$sql = $sql.$liceo;
$sql = $sql.'\')';

//$result = mysqli_query($dbconn, $sql) or die("No Funciona");
$row = mysqli_fetch_array($result);
$num_results = mysqli_num_rows($result);

if ($num_results > 0)
{
    echo 'Felicidades ' . htmlspecialchars($nombreUsuario).'! has entrado en la aplicacion ';
}
else{

      echo 'El usuario no esta registrado en el sistema ' . htmlspecialchars($nombreUsuario);
}
*/

?>
