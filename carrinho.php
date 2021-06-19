<?php
require_once('conn.php');

session_start();
if (isset($_SESSION["email"]) == false) {
    header("location: login.php");
}

$codigoCliente = $_SESSION["id"];
$sessionId = session_id();

VAR_DUMP($sessionId);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/521a3c16fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./assets/seventeen.png">
    <title>SevenTeen</title>
</head>

<body>
    <div class="container-fluid">
        <header>
        <?php require_once('menu.php'); ?>
        </header>
        <main class="container-fluid">
            <h1 id=titulo>MEU CARRINHO</h1>
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#Item</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="align-middle">1</th>
                            <td><img id="carrinho-imagem" class="img-fluid rounded" src="./assets/camiseta1.png"></img"></td>
                            <td class="align-middle">Camiseta Branca</td>
                            <td class="align-middle">R$ 29,90</td>
                        </tr>
                        <tr>
                            <th scope="row" class="align-middle">2</th>
                            <td><img id="carrinho-imagem" class="img-fluid rounded" src="./assets/camiseta1.png"></img"></td>
                            <td class="align-middle">Camiseta Branca</td>
                            <td class="align-middle">R$ 29,90</td>
                        </tr>
                        <tr>
                            <th scope="row" class="align-middle">3</th>
                            <td><img id="carrinho-imagem" class="img-fluid rounded" src="./assets/camiseta1.png"></img"></td>
                            <td class="align-middle">Camiseta Branca</td>
                            <td class="align-middle">R$ 29,90</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Valor total: R$ 119,60</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
        <footer class="row justify-content-center mt-2" id="footer-carrinho">
            <div id="lado-carrinho" class=""></div>
            <div id="copy">ⓒ 2021 Seventeen. Todos os direitos reservados.</div>
            <div id="icons" class="row justify-content-end"><i class="fab fa-facebook-square pr-2"></i><i
                    class="fab fa-instagram-square pl-2"></i></div>
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</html>