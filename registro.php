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
    $correo=$_POST ['correo'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2']
    if($pass1 ==$pass2){
        $pass1= base64_encode($pass1);
        $sql="INSERT INTO usuario(usuario, correo, pass) value ('".$nombre."','".$correo."','".$pass1."')";
        if(mysqli_query($conn,$sql)){
            header("location:index,html");
        }else{
            echo "error".mysqli_error($conn);
        }
    }else{
        header("location:register.php?estado=1");
    }
}
?>