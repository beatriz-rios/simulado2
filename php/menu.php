<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Bem vindo <?php echo $_SESSION['usuario'];?> !</h1>
    <h3>menu</h3>
    <ul>
        <li><a href="http://localhost/simulado2/php/prod.php">Cadastro de Produtos pet</a></li>
        <li><a href="http://localhost/simulado2/php/movprodut.php">Movimento produto pet</a></li>
        <li><a href="http://localhost/simulado2/php/medicacao.php">Cadastro de medicação Pet pet</a></li>
        <li><a href="http://localhost/simulado2/php/movmed.php">Movimento de Meidicação pet</a></li>
        <li><a href="http://localhost/simulado2/php/gestao.php/">Gestão mundo pet</a></li>
    </ul>
    
    <button id="btn-logout" onclick="sair()">Sair</button>
    <script src="../js/logout.js"></script>
</body>
</html>