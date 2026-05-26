<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicaçõa dos pets</title>
</head>

<body>
    <h1>Medicação para PET</h1>

    <p>Aqui você <b>NÃO</b> pode cadastraer produtos em geral <b>APENAS</b>medicação.</p>
     <ul>
        <li><a href="http://localhost/simulado2/php/prod.php">Cadastro de Produtos pet</a></li>
        <li><a href="http://localhost/simulado2/php/movprodut.php">Movimento produto pet</a></li>
        <li><a href="http://localhost/simulado2/php/medicacao.php">Cadastro de medicação Pet pet</a></li>
        <li><a href="http://localhost/simulado2/php/movmed.php">Movimento de Meidicação pet</a></li>
        <li><a href="http://localhost/simulado2/php/gestao.php/">Gestão mundo pet</a></li>
    </ul>

    <form method="post">

        <label>Nome do remédio:</label>
        <input type="text" name="remed"><br>


        <label>validade da medicação:</label>
        <input type="date" name="vali"><br>


        <label>Peso Líquido:</label>
        <input type="text" name="pesliq"><br>


        <label>Indicação Terapeutica:</label>
        <input type="text" name="indic"><br>


        <label>Insturção de Uso:</label>
        <input type="text" name="uso"><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $remed  = $_POST['remed'];
        $vali  = $_POST['vali'];
        $pesliq  = $_POST['pesliq'];
        $indic  = $_POST['indic'];
        $uso  = $_POST['uso'];
    

 $servename = "localhost";
 $username = "root";
 $password = "";
 $database = "petshop_db";

 $conn = mysqli_connect($servename, $username, $password, $database);

 if(!$conn){
    echo"<div class=message-error> Erro de conexão" . mysqli_connect_error() ."</div>";
 }

  $sql = "INSERT INTO remedio(
        nome_remedio,
        validade,
        pesoliquido,
        indicacaoterapeutica,
        instrucoesuso
    )VALUE(
        '$remed ',
        '$vali',
        '$pesliq',
        '$indic',
        '$uso'
    )";

    if(mysqli_query($conn, $sql)){
        echo"<div class=message-sucess> Cadastro feito com sucesso!";
    }else{
        echo"<div message-error>" . $sql . mysqli_error($conn) . "</div>";
    
    }

    mysqli_close($conn);
    }
    ?>
</body>

</html>