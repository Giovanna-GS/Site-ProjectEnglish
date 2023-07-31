<?php
    session_start();

    include("conexao.php");
    
    if(!isset($_SESSION['valid'])){
        header('Location: login.php');
    }

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM tbl_usuarios where id ='$id'";
    $res = mysqli_query($strcon, $sql);
    $pega = mysqli_fetch_array($res);

    $nome = $pega['nomePessoa'];
    $sobrenome = $pega['sobrenomePessoa'];
    $email = $pega['email'];
    $senha = $pega['senha'];
    $tel = $pega['numCelular'];
    $user = $pega['nomeUsuario'];


    if (isset($_POST['submit'])) {
        $nomeNovo = $_POST['nome'];
        $sobrenomeNovo = $_POST['sobrenome'];
        $telNovo = $_POST['tel'];
        $emailNovo = $_POST['email'];
        $senhaNova = $_POST['senha'];



        $senhaOK = trim(password_hash($senhaNova, PASSWORD_DEFAULT));
        $atualiza = "UPDATE tbl_usuarios SET nomePessoa = '$nomeNovo', sobrenomePessoa = '$sobrenomeNovo', numCelular = '$telNovo', email = '$emailNovo', senha = '$senhaOK'
                    WHERE id = '$id'";
        $atulizador = mysqli_query($strcon, $atualiza) or die("Dados não atualizados!");
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
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
    <script src="index.js"></script>
</head>
<body id="login">
    <form class="form-registrar" action="editar.php" method="POST">
        <h3 class="titulo-form">Registra-se</h3>
        <div class="row g-3">
            <div class="col-md-5">
                <label for="usuario">Usuario</label>
                <label for="user"><?php echo $user ?>
            </div>
            <div class="col-md-5">
                <label for="nome">Nome</label>
                <input type="text" class="form-control"  aria-label="Nome" name="nome" value="<?php echo $nome ?>">
            </div>
            <div class="col-md-5">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" aria-label="Sobrenome" name="sobrenome" value="<?php echo $sobrenome ?>">
            </div>
            <div class="col-md-5">
                <label for="email">E-mail</label>
                <input type="email" class="form-control"  aria-label="email" name="email" value="<?php echo $email ?>">
            </div>
            <div class="col-md-5">
                <label for="cel">Celular</label>
                <input type="tel" class="form-control"  aria-label="Celular" name="tel" maxlength="15" onkeyup="handlePhone(event)" value="<?php echo $tel ?>">
            </div>
            <div class="col-md-5">
                <label for="pass">Senha</label>
                <input type="password" class="form-control"  aria-label="senha" name="senha" required>
            </div>
            <div class="col-md-5">
                <label for="pass">Confirma senha</label>
                <input type="password" class="form-control"  aria-label="senha" name="senha1" required>
            </div>
            
            <input type="submit" name="submit" class="button-login" value="Alterar">
        </div>
    </form>
    
    <div class="background">

    </div>
</body>
</html>