<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de movimentação de Medicação</title>
</head>

<body>
    <h1>Cadastro de movimentação de Medicação</h1>

    <ul>
        <li><a href=""></a></li>
    </ul>
    <p>Aqui você <b>NÃO</b> pode cadastraer produtos em geral apenas medicação.</p>
    
 <ul>
        <li><a href="http://localhost/simulado2/php/prod.php">Cadastro de Produtos pet</a></li>
        <li><a href="http://localhost/simulado2/php/movprodut.php">Movimento produto pet</a></li>
        <li><a href="http://localhost/simulado2/php/medicacao.php">Cadastro de medicação Pet pet</a></li>
        <li><a href="http://localhost/simulado2/php/movmed.php">Movimento de Meidicação pet</a></li>
        <li><a href="http://localhost/simulado2/php/gestao.php">Gestão mundo pet</a></li>
    </ul>

    <form method="POST">

        <label>Id da medicação:</label>
        <input type="text" name="med"><br>

        <label>Movimento:</label>
        <input type="text" name="movi" placeholder="entrada ou saida"><br>

        <label>data da movimentação:</label>
        <input type="date" name="dtam"><br>

        <label>Quantidade:</label>
        <input type="text" name="quanti"><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $med = $_POST['med'];
        $movi = $_POST['movi'];
        $dtam = $_POST['dtam'];
        $quanti = $_POST['quanti'];


        if($movi == "saida" || $movi == "saída"){
            $quanti = $quanti * -1;
        }



        $servename = "localhost";
        $username = "root";
        $password = "";
        $database = "petshop_db";

        $conn = mysqli_connect($servename, $username, $password, $database);

        if (!$conn) {
            echo "<div class=message-error> Erro de conexão" . mysqli_connect_error() . "</div>";
        }




 $sql = "INSERT INTO movremed(
        remedio_idremedio,
        movimento,
        dat,
        quant
    )VALUE(
        '$med',
        '$movi',
        '$dtam',
        '$quanti'
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