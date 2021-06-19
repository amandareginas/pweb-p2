<?php
require_once('conn.php');

session_start();
if (isset($_SESSION["email"]) == false) {
    header("location: login.php");
}

$codigoCliente = $_SESSION["id"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/521a3c16fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./assets/seventeen.png">
    <title>SevenTeen</title>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <header>
            <?php require_once('menu.php'); ?>
        </header>
        <main class="container-fluid">
            <h1 id=titulo>DETALHES DO PRODUTO</h1>
            <div class="row justify-content-center" id="sec-detalhes">
                <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    $sql = "select * from produtos where id = '$id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($rows = $result->fetch_assoc()) {
                            $valor = $rows["valor"];
                            $codigoProduto = $rows["id"];
                ?>
                            <div class="card text-center" style="width: 17rem; height: 32rem;">
                                <div class="box-produto" id="<?php echo $rows["categoria"]; ?>" style="display:inline-block" ;>
                                    <img class="card-img-top" src=".<?php echo $rows["imagem"]; ?>" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <p class="card-title"><?php echo $rows["titulo"]; ?></p>
                                        <p class="card-text"><?php echo $rows["descricao"]; ?></p>
                                        <p class="card-text">R$ <?php echo $rows["valor"]; ?></p>
                                    </div>
                                </div>
                                <a class="btn botao-carrinho" id="carrinho">+<i class="fas fa-shopping-cart"></i></a>
                                <script>
                                    document.getElementyById("carrinho").addEventListener("click", <?php $adicionar = 0 ?>);
                                </script>
                            </div>
                <?php

                            if (isset($adicionar)) {
                                $codigoCliente = $_SESSION["id"];

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "loja";
                                $conn = mysqli_connect($servername, $username, $password, $database);
                                $sessionId = session_id();

                                $sql = "insert into cesta (sessionID, codigoCliente, codigoProduto, quantidade, valorUnitario, valorTotal) values ('33333', '99985, '52', '1', '044', '0')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "FOIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII";
                                } else {
                                    echo "NAAAAAAAAAAAOOOOOOOOOOOOOOOOOOOOO";
                                }
                            }
                        }
                    }
                } else {
                    echo "Nenhum produto cadastrado";
                }

                ?>
            </div>
        </main>
        <footer class="row justify-content-center">
            <div id="lado" class=""></div>
            <div id="copy">ⓒ 2021 Seventeen. Todos os direitos reservados.</div>
            <div id="icons" class="row justify-content-end"><i class="fab fa-facebook-square pr-2"></i><i class="fab fa-instagram-square pl-2"></i></div>
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>

<?php



?>