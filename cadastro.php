<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/521a3c16fd.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./script.js"></script>
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
            <h1 id="titulo">CADASTRO</h1>
            <form method="post" action="cadastro.php" name="formulario" id="form-cadastro">
                <div class="form-group">
                    <input name="nome" type="name" class="form-control place" id="nome-completo" aria-describedby="nome"
                        placeholder="NOME COMPLETO">
                </div>
                <div id="soma">
                    +
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" id="email" placeholder="E-MAIL">
                </div>
                <div id="soma">
                    +
                </div>
                <div class="form-group">
                    <input name="endereco" type="text" class="form-control" id="endereco"
                        placeholder="ENDEREÇO COMPLETO">
                </div>
                <div class="row">
                    <div class="col" id="soma">+</div>
                    <div class="col" id="soma">+</div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input name="senha" type="password" class="form-control" placeholder="SENHA">
                    </div>
                    <div class="col">
                        <input name="senha2" type="password" class="form-control" placeholder="CONFIRMAR SENHA">
                    </div>
                </div>
                <div id="igual">=</div>
                <button name="botaoCadastrar" type="submit" class="btn btn-primary">CADASTRAR</button>
                <?php
                    if(isset($_POST["botaoCadastrar"])) inserir();
            ?>
            </form>



            <div class="row justify-content-center mt-4">
                <a href="./login.php" class="">JÁ POSSUI CADASTRO? CLIQUE AQUI!</a>
            </div>
        </main>
        <footer class="row justify-content-center">
            <div id="lado" class="text-danger"></div>
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

<?php
        function inserir(){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $endereco = $_POST["endereco"];
            $conexao = new mysqli("localhost", "root", "", "loja");
            $sql = "insert into cliente(nome, email, senha, endereco)
            values ('$nome', '$email', '$senha', '$endereco')";
            if(mysqli_query($conexao, $sql)){
                echo "<br><br><div class='alert alert-success' role='alert'>Cadastro efetuado com sucesso!</div>";
            };
            mysqli_close($conexao);
        };
?>
