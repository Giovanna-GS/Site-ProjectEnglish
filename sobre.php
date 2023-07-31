<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="shortcut icon" href="assets/img/reino-unido.png" type="image/x-icon">
    
    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <title>Home</title>
</head>
<body>
    <?php
        if(isset($_SESSION['valid'])){
            include_once("conexao.php");
            $resultado = mysqli_query($strcon, "SELECT * FROM tbl_usuarios");
    ?>
    <header>
        <nav class="navbar navbar-expand-lg menu ignorar">
            <div class="container-fluid">
                <h4 class="logo-menu">ProjectEnglish</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="duvidas.php">Dúvidas</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="conteudo.php">Aulas gratuitas</a>
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropstart" >
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user-astronaut"></i>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="editar.php">Alterar cadastro</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php
        }
        else{
        ?>
            <nav class="navbar navbar-expand-lg menu ">
                <div class="container-fluid ">
                    <h4 class="logo-menu">ProjectEnglish</h4>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                        <div class="navbar-nav ">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            <a class="nav-link" href="sobre.php">Sobre</a>
                            <a class="nav-link" href="duvidas.php">Dúvidas</a>
                            <a class="nav-link" href="login.php">Aulas gratuitas</a>
                        </div>
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="login.php">Login</a>
                            <a class="nav-link" href="registro.php">Registra-se</a>
                        </div>
                    </div>
                </div>
            </nav>
    </header>
    <?php
        }
    ?>
  <img src="assets/img/banner.png" alt="" class="img-banner">

  <main>


    <section class="principal">
      <img class="home-img" src="assets/img/projeto.png" alt="" class="img-projeto">

      <div class="aulas">
        <h2 class="titulo">O Projeto</h2>
        <p> No ano de 2020, o ProjectEnglish foi criado para atender a todos os níveis de proficiência na língua, ondeensina de inglês iniciante ao avançado, é uma opção abrangente e flexível para quem quer aprender inglês com qualidade e eficiência. Com professores qualificados, materiais de alta qualidade e métodos de ensino personalizados, o projeto é uma excelente escolha para quem deseja se aperfeiçoar no idioma e alcançar fluência com confiança. </p>

      </div>
    </section>


    <h2 class="titulo-sobre">Conheça os Professores</h2>
      <section class="professores">
      <div class="box">
        <div class="box__content">
          <div class="box__front">
            <img src="assets/img/professor.png" alt="">
          </div>
      
          <div class="box__back">
            <h2>Alexandre</h2>
            <p>O professor Alexandre, um talentoso professor de inglês com 34 anos de idade e que mora em São Paulo e também criador do ProjectEnglish. Ele tem uma paixão pela língua inglesa e está sempre procurando novas maneiras de ajudar seus alunos a aprenderem inglês de forma mais eficaz.</p>
          </div>
        </div>

        
      </div>

      <div class="box">
        <div class="box__content">
          <div class="box__front">
            <img src="assets/img/professor-2.png" alt="">
          </div>
      
          <div class="box__back">
            <h2>Mariane</h2>
            <p>Mariane é uma professora de inglês apaixonada por ensinar e viajar. Ela é dedicada em adaptar suas lições às necessidades e interesses de cada aluno. Ela acredita que a língua inglesa é uma ferramenta poderosa para ajudar as pessoas a se conectarem em um mundo cada vez mais globalizado.</p>
          </div>
        </div>

        
      </div>

      <div class="box">
        <div class="box__content">
          <div class="box__front">
            <img src="assets/img/professor-3.png" alt="">
          </div>
      
          <div class="box__back">
            <h2>Luiza</h2>
            <p>Luiza é apaixonada por ensinar, mas também tem um grande amor por filmes e cozinhar. Ela acredita que aprender uma língua pode ser uma experiência divertida e agradável. Sempre que possível, ela gosta de incluir filmes e receitas em suas aulas para torná-las mais interessantes.</p>
          </div>
        </div>

        
      </div>
    </section>

    

    <form class="formulario-azul" id="contact-form">
      <h2>Quer marcar uma aula EXPERIMENTAL?</h2>
      <p class="descricao">Envie nos um e-mail ou uma mensagem no Whatsapp que entraremos em contato</p>

      <input type="hidden" name="contact_number">

      <input type="text" class="input-padrao" name="user_name" required placeholder="Nome e Sobrenome">

      <input type="email" class="input-padrao" name="user_email" required placeholder="seuemail@dominio.com">

      <textarea cols="50" rows="10" id="mensagem" class="input-padrao" name="message" required
        placeholder="Mensagem"></textarea>

      <input type="submit" value="Enviar" class="botao-vermelho">
    </form>

  </main>

  <footer>
    <h2>ProjectEnglish</h2>
    
    <div class="links">
      
      <a href="index.html">Home</a>
      <a href="sobre.html">Sobre</a>
      <a href="duvidas.html">Duvidas</a>
      <a href="aulas.html">Aulas gratuitas</a>
      <a href="privacidade.html">Politica Privacidade</a>
    </div>
    
    <div class="redes">
     <a href=""> <i class="fa-brands fa-square-facebook"></i></a>
  
    <a href=""><i class="fa-brands fa-instagram"></i></a>
  
    <a href=""><i class="fa-brands fa-whatsapp"></i></i></a> 
  
    <a href=""> <i class="fa-brands fa-square-youtube"></i></a>
    </div>
  </footer>

</body>


</main>
</body>

</html>