<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r('Email: ' . $email);
    print_r('<br>');
    print_r('Senha: ' . $senha);
    

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');


    }if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
        // O usuário não está autenticado, redirecionar para a página de cadastro
        header('Location: index.php');
        exit();
    }
}
else
{
    header('Location: login.php');
}
?>