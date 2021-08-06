<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "agenda";
//create connection
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// create connection
if(!$conn){
    die("conexion fallida: ".mysqli_connect_error());
}else{
    echo "conexion completada";
}

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='".$correo."'  AND pass ='".$pass."'");
$resultado = mysqli_num_rows($sql);

if($resultado ==1){
    $sql = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='".$correo."'  AND pass ='".$pass."'");
    $fila = mysqli_fetch_array($sql);

    header("location: /ochosorio/index.php=$fila[id]");
}else{
    echo"datos incorrectos";
    header("location: index.html");
}

?>