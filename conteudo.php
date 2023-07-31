<?php
    //session_start();

    // if(!isset($_SESSION['valid'])){
        // header("LOCATION: login.php");
   // }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/img/reino-unido.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Curso</title>
</head>
<body>
    <main>
        <aside class="menu__container">
            <ul class="menu__lista">
                <h2>Project English</h2>
                <li>
                    <a class="menu__itens" href="index.php">
                        <i class="fa-solid fa-house"></i>
                        <span>Início</span>
                    </a>
                </li>

                <li>
                    <a class="menu__itens" href="sobre.php">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span>Sobre</span>
                    </a>
                </li>

                <li>
                    <a class="menu__itens" href="duvidas.php">
                        <i class="fa-solid fa-question"></i>
                        <span>Dúvidas</span>
                    </a>
                </li>

                <li>
                    <a class="menu__itens" href="editar.php">
                        <i class="fa-solid fa-user"></i>
                        <span>Cadastro</span>
                    </a>
                </li>
            </ul>
        </aside>

            <h2 class="titulo-cursos">Inglês - Iniciante</h2>
            <ul class="videos__container iniciante">
                
                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/S45kHeWnT0M"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                    <div class="descricao-videos">
                        <h3>Iniciante - Aula 01</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/fVZhgNAXMd0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                    <div class="descricao-videos">
                        <h3>Iniciante - Aula 02</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/H2xHm2I5Yio"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                    <div class="descricao-videos">
                        <h3>Iniciante - Aula 03</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/f24DVDiPMBo"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                    <div class="descricao-videos">
                        <h3>Iniciante - Aula 04</h3>
                    </div>
                </li>
            </ul>

            <h2 class="titulo-cursos">Inglês - Intermediário</h2>

            <ul class="videos__container iniciante">
                
                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/q_jBiCI9sf8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Intermediário - Aula 01</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/uXh7uKzgUYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Intermediário - Aula 02</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/a021nXcHBmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Intermediário - Aula 03</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/ghn-xEPpDuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Intermediário - Aula 04</h3>
                    </div>
                </li>
            </ul>

            <h2 class="titulo-cursos">Inglês - Avançado</h2>
            <ul class="videos__container iniciante">
                
                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/xAP10HfbMEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Avançado - Aula 01</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/xAP10HfbMEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Avançado - Aula 02</h3>
                    </div>
                </li>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="https://www.youtube.com/embed/HypeEncAveU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="descricao-videos">
                        <h3>Avançado - Aula 03</h3>
                    </div>
            
                    </div>
                </li>
            </ul>
    </main>
</body>
</html>