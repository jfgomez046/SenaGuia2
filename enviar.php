<?php
$conectar = mysqli_connect("127.0.0.1","root","123","programa");

if(!$conectar){
    echo "No conectado";
}

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$tipo_sangre = $_POST['tipo_sangre'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO aprendices(documento, nombre, apellido, edad, telefono, tipo_sangre, direccion) VALUES ('$documento','$nombre','$apellido','$edad','$telefono','$tipo_sangre','$direccion')";

$ejecutar = mysqli_query($conectar, $sql);

if(!$ejecutar){
    echo "Hay algun error";
    
}else{
    echo "Datos almacenados correctamente";
}
?>
 