<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Bem vindo <?php echo $_SESSION['usuario']?> !</h1>
    <h3>menu</h3>
    <ul>
        <li><a href="">Cadastro de Produtos pet</a></li>
        <li><a href="">Movimento pet</a></li>
        <li><a href="">Gestão mundo pet</a></li>
    </ul>
    
    <button id="btn-logout" onclick="sair()">Sair</button>
    <script src="../js/logout.js"></script>
</body>
</html>