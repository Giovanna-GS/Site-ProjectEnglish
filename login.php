<?php 
    //session_start(); 
    //include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/reino-unido.png" type="image/x-icon">
</head>
<body id="login">
    <?php 
        if(isset($_POST['submit'])){
            $user = mysqli_real_escape_string($strcon, $_POST['nome']);
            $pass = mysqli_real_escape_string($strcon, $_POST['senha']);

            if($user == "" || $pass == ""){
                echo "Nome de usuário ou senha vazio!.<br>";
                echo "<a href = 'login.php'>Voltar a página de Login</a>";
            }
            else{
                $sql = "SELECT * FROM tbl_usuarios WHERE nomeUsuario = '$user'";
                $res = mysqli_query($strcon, $sql) or die ("Não foi possivel logar!");

                $linha = mysqli_fetch_assoc($res);

                $hashsenha = password_verify($pass, $linha['senha']);

                if(is_array($linha) && !empty($linha) && $hashsenha){
                    $validuser = $linha['nomeUsuario'];
                    $_SESSION['valid'] = $validuser;
                    $_SESSION['name'] = $linha['nomePessoa'];
                    $_SESSION['id'] = $linha['id'];
                }
                else{
                    echo "Nome de usuário ou senha incorretos!<br>";
                    echo "<a href = 'login.php'>Voltar a página de Login</a>";
                }
                if(isset($_SESSION['valid'])){
                    header('Location: index.php');
                }
            }
        }
        else{
    ?>
    <div class="color">
        <h3 class="logo"><a class="logo" href="index.php">ProjectEnglish</a></h3>
        
        <img class="login-img" src="assets/img/login.png" alt="">
    </div>

    <form action="" class="form-login" method="POST">
        <h2 class="titulo-form">Login</h2>
        <input class=" input-login" type="text" name="nome" placeholder="Usuario">

        <input  class="input-login" type="password" name="senha" placeholder="Senha"> 

        <h4>Não possui cadastro? <a href="registro.php">Registra-se</a></h4>

        <input type="submit" name="submit" class="button-login botao-vermelho" value="Entrar">
    </form>
    <?php
        }
    ?>
</body>
</html>