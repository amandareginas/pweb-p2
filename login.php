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
            <h1 id="titulo-login">LOGIN</h1>
            <?php fazerLogin(); ?>
            <form id="form-login" name="formlogin" action="login.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="E-MAIL">
                </div>
                <div id="soma">
                    +
                </div>
                <div class="form-row">
                        <input type="password" name="senha" class="form-control" placeholder="SENHA">
                </div>
                <div id="igual" class="mb-3">=</div>
                <button type="submit" class="btn btn-primary" name="botaoLogin">ENTRAR</button>
            </form>
            <div class="row justify-content-center mt-5">
                <a href="./cadastro.php" class="">NÃO POSSUI CADASTRO? CLIQUE AQUI!</a>
            </div>
            <div class="row justify-content-center mt-5">
                <a href="./senha.php" class="" id="esqueceu-senha">Esqueceu a senha? Clique aqui.</a>
            </div>
        </main>
        <footer class="row justify-content-center fixed-bottom">
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
function fazerLogin(){
	if(isset($_POST["botaoLogin"])){
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$conexao = new mysqli("localhost", "root", "", "loja");
		$sql = "select * from cliente where email='$email' and senha='$senha'";	
		$resultado = mysqli_query($conexao, $sql);
		if($reg = mysqli_fetch_array($resultado)){
			session_start();
			$_SESSION["nome"] = $reg["nome"];
			$_SESSION["id"] = $reg["id"];
			$_SESSION["email"] = $reg["email"];
            $_SESSION["endereco"] = $reg["endereco"];
			header("location: conta.php");
		} else {
			echo "<h3>Usuario e senha invalidos !</h3>";
		}	
		mysqli_close($conexao);	
	}
}
?>