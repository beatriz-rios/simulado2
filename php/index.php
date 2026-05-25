<?php
session_start();
if ($_POST) {
  $use = $_POST['use'];
  $sn = $_POST['sn'];

  if ($use == "Admin" && $sn == "123") {
    $_session['usuario'] = $use;
    header("Location: menu.php");
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
  <input name='use' type="text" placeholder="usuario" required>
  <input name='sn' type="password" placeholder="senha" required>
  <button>Entrar</button>
</form>
</body>

</html>