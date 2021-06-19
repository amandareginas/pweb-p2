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
    <div class="container text-center mt-5">
        <?php vlFormulario() ?>
        <h3>Volte para a página de Cadastro</h3>
        <a href="./login.php">CLIQUE AQUI</a>
        <div>
</body>

</html>

<?php
function vlFormulario()
{
    if (isset($_POST["botaoLogin"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;

        header("location: conta.php");
    }
}
?>