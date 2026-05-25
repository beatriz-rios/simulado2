<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produto</title>
</head>
<body>
  <h1>Cadastro dos produtos pet</h1>
  <form method="post">
  <label>Nome produto</label>
  <input type="text" name="prod"><br>

  <label>codigo do produto</label>
  <input type="text" name="cod"> <br>

  <label>fabricante</label>
  <input type="text" name="fab" ><br>

   <label>preço</label>
  <input type="text" name="preco" ><br>

   <label>validade</label>
  <input type="text" name="val" ><br>

   <label>peso da embalagem</label>
  <input type="text" name="peso" ><br>

   <label>indicação de espécie</label>
  <input type="text" name="pet" ><br>

   <label>sabor</label>
  <input type="text" name="sab" ><br>

   <label>categoria</label>
  <input type="text" name="catg" ><br>
  </form>


<?php

  if($_SERVER['REQUEST_METHOD']== 'POST'){
    $prod = $_POST['prod'];
    $cod = $_POST['cod'];
    $fab = $_POST['fab'];
    $preco = $_POST['preco'];
    $val = $_POST['val'];
    $peso = $_POST['peso'];
    $pet = $_POST['pet'];
    $sab = $_POST['sab'];
    $catg = $_POST['catg'];

    
  }
    ?>
</body>
</html>