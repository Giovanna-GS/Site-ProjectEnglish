<?php
   // include('conexao.php');

    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $tel =  $_POST['cel'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $confirmaSenha = $_POST['pass2'];
        echo $tel;
        

        if(empty($nome) || empty($sobrenome) || empty ($email) || empty($tel) || empty($user) || empty($pass) || empty($confirmaSenha)){
            echo "Todos os campos devem ser preenchidos.<br>";
            echo "<a href='registro.php'>Voltar</a>";
        }
        else if ($confirmaSenha != $pass){
            echo "Senhas preenchidas não coincidem!<br>";
            echo "<a href='registro.php'>Voltar</a>";
        }
        else{
            $hashsenha = trim(password_hash($pass, PASSWORD_DEFAULT));
        $sql_registro = "INSERT INTO tbl_usuarios (nomePessoa, sobrenomePessoa, nomeUsuario, email, numCelular, senha)
                        VALUES ('$nome', '$sobrenome', '$user', '$email', '$tel', '$hashsenha')";
        $res_registro = mysqli_query($strcon, $sql_registro) or die(mysqli_error());

        echo "Registro Feito!";
    }
        mysqli_close($strcon);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra-se</title>
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
    <div class="background">
        <a class="logo" href="index.php">ProjectEnglish</a>
    </div>
    
    <form class="form-registrar" action="registro.php" method="POST">
        <h3 class="titulo-form">Registra-se</h3>
        <div class="row g-3">
            <div class="col-md-5">
                <label for="nome">Nome</label>
                <input type="text" class="form-control"  aria-label="Nome" name="nome">
            </div>
            <div class="col-md-5">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" aria-label="Sobrenome" name="sobrenome">
            </div>
            <div class="col-md-5">
                <label for="user">Usuario</label>
                <input type="text" class="form-control"  aria-label="User" name="user">
            </div>
            <div class="col-md-5">
                <label for="email">E-mail</label>
                <input type="email" class="form-control"  aria-label="email" name="email">
            </div>
            <div class="col-md-5">
                <label for="cel">Celular</label>
                <input type="tel" class="form-control"  aria-label="Celular" name="cel" maxlength="15" onkeyup="handlePhone(event)">
            </div>
            <div class="col-md-5">
                <label for="pass">Senha</label>
                <input type="password" class="form-control"  aria-label="senha" name="pass">
            </div>
            <div class="col-md-5">
                <label for="pass">Confirma senha</label>
                <input type="password" class="form-control"  aria-label="senha" name="pass2">
            </div>
            <p>Já possui uma conta? Faça o <a href="login.php">Login</a></p>
            <input type="submit" name="submit" class="button-login" value="Registrar">
        </div>
    </form>
</body>
</html>