 <?php
    $servename = "localhost";
    $username = "root";
    $password = "";
    $database = "petshop_db";


    $conn = mysqli_connect($servename, $username, $password, $database);
    if (!$conn) {
        echo "<div class= message-erro> Erro ao conectar no banco" . mysqli_connect_error() . "</div>";
    }
    ?>
    