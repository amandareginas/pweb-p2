<?php
require_once('conn.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        <main>
            <div id="sec-carrossel">
                <section class="" id="esquerda"></section>
                <section class="" id="carrossel">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade mt-3" data-ride="carousel">
                        <div class="carousel-inner">
                                    <div class="carousel-item active bg white">
                                        <img class="d-block w-100" src="./assets/roupas/2.png" alt="Primeiro Slide">
                                    </div>
                            <?php
                            $sql = "select * from produtos where destaque = '0'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($rows = $result->fetch_assoc()) {
                            ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src=".<?php echo $rows['imagem'] ?>" alt="Primeiro Slide">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </section>
                <section class="" id="direita"></section>
            </div>
            <div>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src=".<?php echo $rows['imagem'] ?>" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">NOVIDADE!</h5>
                            <p class="card-text">Confira nossa coleção outono-inverno!</p>
                            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src=".<?php echo $rows['imagem'] ?>" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">NOVIDADE!</h5>
                            <p class="card-text">Aqui tem seu estilo!</p>
                            <p class="card-text"><small class="text-muted">Atualizados a 5 dias atrás</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src=".<?php echo $rows['imagem'] ?>" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">NOVIDADE!</h5>
                            <p class="card-text">Alerta de tendência.</p>
                            <p class="card-text"><small class="text-muted">Atualizados 1 mês atrás</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="row justify-content-center" id="footer-index">
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