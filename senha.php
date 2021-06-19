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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>SevenTeen</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <?php require_once('menu.php'); ?>
        </header>
        <main>
            <h1 id="titulo">RECUPERAR SENHA</h1>
            <form method="post" action="senha.php" name="recuperar" id="sec-senha" class="justify-content-center">
                <label for="inputEmail">Insira seu e-mail para recuperar a senha:</label>
                <input class="form-control" type="text" name="email" placeholder="exemplo@exemplo.com" id="idSubmit"><br>
                <button type="submit" class="btn btn-primary" onclick="validarEmail()" name="enviarEmail">ENVIAR</button>


                <?php
                if (isset($_POST["enviarEmail"])) enviar();

                function enviar()
                {
                    $para = $_POST["email"];

                    $conexao = new mysqli("localhost", "root", "", "loja");
                    $sql = "select * from cliente where email='$para'";
                    $resultado = mysqli_query($conexao, $sql);

                    $assunto = "Recuperação de Senha";

                    if ($resultado->num_rows > 0) {
                        while ($rows = $resultado->fetch_assoc()) {
                            $senha = $rows['senha'];
                        }
                    }
                    $mensagem = "Sua senha é: $senha";
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "from: Fatec Teste<fatecpwAds2016@outlook.com>";

                    mail($para, $assunto, $mensagem, $header);
                    echo "<br><br><div class='alert alert-success' role='alert'>Senha enviada para: $para!</div>";
                }
                ?>
            </form>

        </main>
        <footer class="row justify-content-center fixed-bottom">
            <div id="lado" class="text-danger"></div>
            <div id="copy">ⓒ 2021 Seventeen. Todos os direitos reservados.</div>
            <div id="icons" class="row justify-content-end"><i class="fab fa-facebook-square pr-2"></i><i class="fab fa-instagram-square pl-2"></i></div>
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>