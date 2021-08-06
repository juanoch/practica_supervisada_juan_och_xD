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
    $pass1=$_POST['pass'];
        $pass1= base64_encode($pass1);
        $sql="SELECT count(*) as  contar from usuario where usuario='$usuario' AND pass='$pass'";
        $consulta=mysqli_query($conn, $sql);
        $array=myslqli_fetch_array($consulta);
        if($array['contar']>0){
            $_SESSION['usuario']=$usuario;
            header("location:index.php");
        }else{
        header("location:index.php?estado=2");
    }
}
?>