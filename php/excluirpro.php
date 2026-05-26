<?php 


$db = mysqli_connect("localhost", "root", "", "petshop_db");

$id = $_GET['id'];

mysqli_query($db, "DELETE FROM movprodut WHERE produtpet_idprodutpet= $id");

mysqli_query($db, "DELETE FROM produtpet WHERE idprodutpet = $id");
header("location: gestao.php");
?>

