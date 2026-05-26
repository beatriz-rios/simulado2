<?php 
$db = mysqli_connect("localhost", "root", "", "petshop_db");

$id = $_GET['id'];

mysqli_query($db, "DELETE FROM movremed WHERE remedio_idremedio= $id");

mysqli_query($db, "DELETE FROM remedio WHERE idremedio = $id");
header("location: gestao.php");
?>

