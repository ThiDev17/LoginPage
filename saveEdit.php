<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST ['id'];
        $usuario = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];

        $sqlUpdate = "UPDATE usuarios SET usuario= '$usuario', senha='$senha', email='$email', sexo='$sexo', data_nasc='$data_nasc'
        WHERE id='$id'";
        
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: sistema.php');
?>