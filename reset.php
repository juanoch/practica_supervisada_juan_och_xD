<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="compu";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("no hay conexion: ".mysqli_connect_error());
}else{
    $usuario=$_POST['usuario']:
    $pass1=$_POST['correo   '];
        $sql2="SELECT * FROM usuario WHERE usuario='$usuario' AND correo='$correo'";
        $consulta2=mysqli_query($conn, $sql2);
        $array2=mysqli_fetch_array($consulta2);
        if(!isset($array['id'])){
            header("location:restaurar.php?estado1");
        }{
            $id= $array2['id'];
            header("location: index.php");
            echo randoma();
        }
    }

function randoma (){
    $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789';
    $longpalabra=10;
    for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
        $x = rand(0,$n);
        $pass= $caracteres[$x];
    }     
    return($pass);
}
?>

