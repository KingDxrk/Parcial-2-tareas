<?php
$CONEXION=mysqli_connect('localhost', 'root','', 'sistema','3306');


$CONSULTA="insert into usuarios (nombre, password) values('ana', '123')";
$RESULTADO=mysqli_query($CONEXION, $CONSULTA);


mysqli_close($CONEXION);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nombre = $_POST["txtUsuario"];
    $password = $_POST["txtPassword"];
    echo "<h2>¡Pudiste entrar felicidades</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>password: $password</p>";
} 
else
 {
    echo "Error: Acceso no autorizado.";
}
?>

