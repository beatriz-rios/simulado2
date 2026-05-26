<?php
session_start();

if ($_POST) {
  $use = $_POST['use'];
  $sn = $_POST['sn'];

  if ($use == "Admin" && $sn == "456") {
    $_SESSION['usuario'] = $use;
    header("location: menu.php");
  } else {
    echo "erro!";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de login</title>
</head>

<body>
  <h1>Pág de login</h1>
<form method="post">
  <input name='use'  placeholder="usuario" required>
  <input name='sn' type="password" placeholder="senha" required>
  <input type="submit" value="entrar">
</form>
</body>
</html>