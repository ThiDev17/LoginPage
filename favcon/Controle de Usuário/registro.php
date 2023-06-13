<?php
   if(isset($_POST['submit']))
   {
        include_once('config.php');
        $usuario = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario,senha,email,sexo,data_nasc)
        VALUES ('$usuario','$senha', '$email', '$sexo', '$data_nasc')");

        header('Location: sistema.php');

   }else{
    
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style2.css">
   <title>Cadastro</title>
   
   
</head>
<body>
   <div class="box">
       <form action="registro.php" method="POST">
           <fieldset>
               <legend><b>CADASTRE-SE</b></legend>
               <br>
               <div class="inputBox">
                   <label for="nome">Nome de Usuário</label><br><br>
                   <input type="text" name="nome" id="nome" placeholder="Nome de Usuário" class="inputUser" required>
               </div><br>
               <div class="inputBox">
                   <label for="senha">Senha</label><br><br>
                   <input type="password" name="senha" id="senha" placeholder="Senha" class="inputUser" required>
                   
               </div><br>
               <div class="inputBox">
                   <label for="nome">Email</label><br><br>
                   <input type="email" name="email" id="email" placeholder="Email" class="inputUser" required>
                   
               </div><br>
               <div class="inputBox">
                   <label for="sexo">Sexo:</label><br><br>
               <input type="radio" id="feminino" name="sexo" value="feminino" required>
               <label for="feminino">Feminino</label><br>
           
               <input type="radio" id="masculino" name="sexo" value="masculino" required>
               <label for="masculino">Masculino</label><br>

               <input type="radio" id="outro" name="sexo" value="outro" required>
               <label for="outro">Outro</label>
               <br>
               </div>
               
               <br><br>
               <div class="inputBox">
                   <label for="data_nascimento">Data de Nascimento:</label>
                   <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
               </div>
               <br><br><br>
               <input type="submit" name="submit" id="submit">
               
           </fieldset>
       </form>
   </div>
</body>
</html>