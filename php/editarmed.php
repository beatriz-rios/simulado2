<?php
$dbs = mysqli_connect("localhost", "root", "", "petshop_db");

$ids = $_GET['id'];

$resulta = mysqli_query($dbs, "SELECT * FROM remedio WHERE idremedio= $ids");

$medica = mysqli_fetch_assoc($resulta);

if($_POST){
    $nomere = $_POST['nome_remedio'];

    mysqli_query($dbs, "UPDATE remedio SET nome_remedio = '$nomere' WHERE idremedio = $ids");
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
<input type="text" name="nome_remedio" value="<?= $medica['nome_remedio']?>">
<button>Salvar alteração</button>
<br><br><br>
</form>
</body>
</html>