<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>produto</title>
</head>

<body>
  <h1>Cadastro dos produtos pet</h1>
  <ul>
    <li><a href="http://localhost/simulado2/php/prod.php">Cadastro de Produtos pet</a></li>
    <li><a href="http://localhost/simulado2/php/movprodut.php">Movimento produto pet</a></li>
    <li><a href="http://localhost/simulado2/php/medicacao.php">Cadastro de medicação Pet pet</a></li>
    <li><a href="http://localhost/simulado2/php/movmed.php">Movimento de Meidicação pet</a></li>
    <li><a href="http://localhost/simulado2/php/gestao.php/">Gestão mundo pet</a></li>
  </ul>

  <p>Aqui você pode cadastrar ração, coleiras, brinquedos, comedouros, bebedouros, roupinha e muito mais</p>
  <strong>Obs: para cadastrar uma medicação/ remédio, terá que ir para o cadastro próprio para medicação!</strong><br><br><br>

  <form method="POST"></form>
  <form method="post">
    <label>Nome produto</label>
    <input type="text" name="prod"><br>

    <label>codigo do produto</label>
    <input type="text" name="cod"> <br>

    <label>fabricante</label>
    <input type="text" name="fab"><br>

    <label>preço</label>
    <input type="text" name="preco"><br>

    <label>validade</label>
    <input type="date" name="val"><br>

    <label>peso da embalagem</label>
    <input type="text" name="peso"><br>

    <label>indicação de espécie</label>
    <input type="text" name="pet"><br>

    <label>sabor</label>
    <input type="text" name="sab"><br>

    <label>categoria</label>
    <input type="text" name="catg"><br><br>

    <input type="submit" value="Cadastrar">
  </form>

  <p><b>ATENÇÃO:</b>Após registar o produto faça o registro de movimentação de entrada ou saída do produto para poder visualizar na gestão.</p>

  <?php
   
    

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prod = $_POST['prod'];
    $cod = $_POST['cod'];
    $fab = $_POST['fab'];
    $preco = $_POST['preco'];
    $val = $_POST['val'];
    $peso = $_POST['peso'];
    $pet = $_POST['pet'];
    $sab = $_POST['sab'];
    $catg = $_POST['catg'];

 $servename = "localhost";
    $username = "root";
    $password = "";
    $database = "petshop_db";


    $conn = mysqli_connect($servename, $username, $password, $database);
    if (!$conn) {
        echo "<div class= message-erro> Erro ao conectar no banco" . mysqli_connect_error() . "</div>";
    }


    $sql = "INSERT INTO produtpet(
        nome,
        codigo,
        fabricante,
        preco,
        validade,
        pesoembalagem,
        indicacaoespecie,
        sabor,
        categoria
    )VALUE(
        '$prod',
        '$cod',
        '$fab',
        '$preco',
        '$val',
        '$peso',
        '$pet',
        '$sab',
        '$catg'
    )";


    if (mysqli_query($conn, $sql)) {
      echo "<div class='message-sucess> Produto cadastrado com sucesso!</div>";
    } else {
      echo "<div class= message-erro>" . $sql . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);
  }
  ?>
</body>

</html>