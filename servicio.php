<?php

include 'Conexion.php';

$conn = mysqli_connect($server,$nombre,$password,$BD);

$name = $_POST['Cliente'];
$price = $_POST['Precio'];
$order = $_POST['Orden'];
$date = $_POST['Fecha'];

$sql_query = "insert into compra(Cliente, Precio, Orden, Fecha) values('$name', '$price', '$order', '$date')";

if(mysqli_query($conn,$sql_query)){
  echo "Datos enviados con exitos";
}else{
  echo "No fueron exitosos los datos";
}

mysqli_close($conn);

?>
