<?php
$db = mysqli_connect("localhost", "root", "", "petshop_db");

$id = $_GET['id'];

$resultado = mysqli_query($db, "SELECT * FROM produtpet WHERE idprodutpet = $id");

$produtoo = mysqli_fetch_assoc($resultado);

if($_POST){
    $nome = $_POST['nome'];

    mysqli_query($db, "UPDATE produtpet SET nome = '$nome' WHERE idprodutpet = $id");
    header("location: gestao.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edição</h1>

<form  method="POST">
<input type="text" name="nome" value="<?= $produtoo['nome']?>">
<button>Salvar alteração</button>

</form>
</body>
</html>

