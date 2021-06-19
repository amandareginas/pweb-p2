<?php
session_start();
if (isset($_SESSION["email"]) == false) {
    header("location: login.php");
}

$id = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <h1 id="titulo">MINHA CONTA</h1>

            <?php
            $id = $_SESSION["id"];

            $conexao = new mysqli("localhost", "root", "", "loja");

            $sql = "select * from cliente where id='$id'";

            $resultado = mysqli_query($conexao, $sql);

            if ($resultado->num_rows > 0) {
                while ($rows = $resultado->fetch_assoc()) {
                    //VAR_DUMP($rows); // ver os valores que a query está retornando
            ?>
                    <form method="post" action="conta.php" name="formulario" id="form-cadastro">
                        <div class="form-group">
                            <input name="nome" type="name" class="form-control place" id="nome-completo" aria-describedby="nome" placeholder="NOME COMPLETO" value="<?php echo $rows['nome']; ?> ">
                        </div>
                        <div id="soma">
                            +
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="email" placeholder="E-MAIL" value="<?php echo $rows['email']; ?>">
                        </div>
                        <div id="soma">
                            +
                        </div>
                        <div class="form-group">
                            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="ENDEREÇO COMPLETO" value="<?php echo $rows['endereco']; ?>">
                        </div>
                        <div class="row">
                            <div class="col" id="soma">+</div>
                            <div class="col" id="soma">+</div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input name="senha" type="password" class="form-control" placeholder="SENHA">
                            </div>
                        </div>
                        <div id="igual">=</div>
                        <button name="botaoAlterar" type="submit" class="btn btn-primary">ALTERAR</button>
                        <button name="botaoDeletar" type="submit" class="btn btn-primary">DELETAR</button>
                    </form>
            <?php
                }
            } else {
                echo "outras opções";
            }
            ?>

            <?php
            if (isset($_POST["botaoAlterar"])) alterar();
            if (isset($_POST["botaoDeletar"])) deletar();
            ?>
            <div class="row justify-content-center mt-4">
                <a href="./login.html" class="">JÁ POSSUI CADASTRO? CLIQUE AQUI!</a>
            </div>
        </main>
        <footer class="row justify-content-center">
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

<?php
function alterar()
{
    $id = $_SESSION["id"];
    $nome    =    $_POST["nome"];
    $email    =    $_POST["email"];
    $senha    =    $_POST["senha"];
    $endereco    =    $_POST["endereco"];
    $conexao =    new mysqli("localhost", "root", "", "loja");
    $sql    =     "update cliente set nome='$nome', email='$email', senha='$senha', endereco='$endereco' where id='$id'";
    mysqli_query($conexao, $sql);
    echo "<h3>Registro alterado com sucesso!</h3>";
    mysqli_close($conexao);
    echo "<script>window.location.href='login.php'</script>";
}

function deletar()
{
    $id = $_SESSION["id"];
    $conexao =    new mysqli("localhost", "root", "", "loja");
    $sql    =     "delete from cliente where id='$id'";
    mysqli_query($conexao, $sql);
    echo "<h3>Registro removido com sucesso!</h3>";
    mysqli_close($conexao);
    echo "<script>window.location.href='cadastro.php'</script>";
}

?>