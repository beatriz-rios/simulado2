<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gestão de estoque</h1>
    <p>Aqui você pode visualizar as tabeas de estowue de produtos emedicações respectivamente.</p>
    <ul>
        <li><a href="http://localhost/simulado2/php/prod.php">Cadastro de Produtos pet</a></li>
        <li><a href="http://localhost/simulado2/php/movprodut.php">Movimento produto pet</a></li>
        <li><a href="http://localhost/simulado2/php/medicacao.php">Cadastro de medicação Pet pet</a></li>
        <li><a href="http://localhost/simulado2/php/movmed.php">Movimento de Meidicação pet</a></li>
        <li><a href="http://localhost/simulado2/php/gestao.php">Gestão mundo pet</a></li>
        <li><a href="http://localhost/simulado2/php/menu.php">Menu</a></li>
    </ul>
    <h2>Gestão de Produtos</h2>
    <?php
    $sql = "SELECT
 c.idprodutpet,
 c.nome,
 c.codigo,
 c.fabricante,
 c.preco,
 c.validade,
 c.pesoembalagem,
 c.indicacaoespecie,
 c.sabor,
 c.categoria,
 SUM(m.quant) as estoque_total
 FROM produtpet c
 INNER JOIN movprodut m ON c.idprodutpet = m.produtpet_idprodutpet
 WHERE c.idprodutpet
 GROUP BY c.idprodutpet, c.nome, c.codigo,
 c.fabricante,
 c.preco,
 c.validade,
 c.pesoembalagem,
 c.indicacaoespecie,
 c.sabor,
 c.categoria";

    $servername = "localhost"; // geralmente é localhost/ 127.0.01:3308(no pc do senai)  mas se estiver usando uma porta diferente, especifique-a
    $username = "root"; // nome de usuário do banco de dados
    $password = "";
    $database = "petshop_db"; // nome do banco de dados

    $conn = mysqli_connect($servername, $username, $password, $database);

    echo "<table border= '3'>";
    echo "<tr><th> ID </th><th> Produtos Animal </th> <th>código</th> <th>fabricante </th>  <th> preço </th> <th>validade </th> <th>peso da embalagem </th> <th> indicação de espécie </th> <th>sabor </th> <th>categoria </th> <th> Estoque </th> <th> Ações </th></tr>";



    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['idprodutpet'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['codigo'] . "</td>";
            echo "<td>" . $row['fabricante'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo "<td>" . $row['validade'] . "</td>";
            echo "<td>" . $row['pesoembalagem'] . "</td>";
            echo "<td>" . $row['indicacaoespecie'] . "</td>";
            echo "<td>" . $row['sabor'] . "</td>";
            echo "<td>" . $row['categoria'] . "</td>";
            echo "<td>" . $row['estoque_total'] . "</td>";
            echo "<td> <a href='/simulado2/php/editarpro.php?id=" . $row["idprodutpet"] . "'>Editar</a> |
          <a href='/simulado2/php/excluirpro.php?id=" . $row["idprodutpet"] . "'>Excluir</a> </td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Erro de gestão " . mysqli_error($conn) . "</td></tr>";
    }
    echo "<table>";
    ?>


    <br><br>
    <h2>Gestão de Medicação</h2>

    <?php
    $sqli = "SELECT
 c.idremedio,
 c.nome_remedio,
 c.validade,
 c.pesoliquido,
 c.indicacaoterapeutica,
 c.instrucoesuso,
 SUM(m.quant) as estoque_total
 FROM remedio c
 INNER JOIN movremed m ON c.idremedio = m.remedio_idremedio
 WHERE c.idremedio
 GROUP BY  c.idremedio,
 c.nome_remedio,
 c.validade,
 c.pesoliquido,
 c.indicacaoterapeutica,
 c.instrucoesuso";

    $servername = "localhost"; // geralmente é localhost/ 127.0.01:3308(no pc do senai)  mas se estiver usando uma porta diferente, especifique-a
    $username = "root"; // nome de usuário do banco de dados
    $password = "";
    $database = "petshop_db"; // nome do banco de dados

    $conn = mysqli_connect($servername, $username, $password, $database);

    echo "<table border= '2'>";
    echo "<tr><th> ID </th><th>Medicação</th> <th>validade</th> <th>Peso líquido</th>  <th> Indicação Terapeutica</th> <th>intrução de uso <th> Estoque </th> <th> Ações </th></tr>";



    $result = mysqli_query($conn, $sqli);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['idremedio'] . "</td>";
            echo "<td>" . $row['nome_remedio'] . "</td>";
            echo "<td>" . $row['validade'] . "</td>";
            echo "<td>" . $row['pesoliquido'] . "</td>";
            echo "<td>" . $row['indicacaoterapeutica'] . "</td>";
            echo "<td>" . $row['instrucoesuso'] . "</td>";
            echo "<td>" . $row['estoque_total'] . "</td>";
            echo "<td> <a href='/simulado2/php/editarmed.php?id=" . $row['idremedio'] . "'>Editar</a> |
 <a href='/simulado2/php/excluirmed.php?id=" . $row['idremedio'] . "'>Excluir</a></td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Erro de gestão " . mysqli_error($conn) . "</td></tr>";
    }
    echo "<table>";

    ?>

</body>

</html>