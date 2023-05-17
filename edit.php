<?php
   if(!empty($_GET['id']))
   {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $usuario = $user_data['usuario'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
            }
            
        }
        else
        {
            header('Location: sistema.php');
        }

   }
   else
   {
        header('Location: sistema.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style2.css">
   <style>
    #update{
        width: 100%;
        padding: 15px 0px;
        margin: 0px;
        border: none;
        border-radius: 10px;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #10009e;
        background: #C147E9;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #0f0099;
}
   </style>
   <title>Cadastro</title>
   
   
</head>
<body>
   <div class="box">
       <form action="saveEdit.php" method="POST">
           <fieldset>
               <legend><b>CADASTRE-SE</b></legend>
               <br>
               <div class="inputBox">
                   <label for="nome">Nome de Usuário</label><br><br>
                   <input type="text" name="nome" id="nome" placeholder="Nome de Usuário" class="inputUser" value="<?php echo $usuario  ?>" required>
               </div><br>
               <div class="inputBox">
                   <label for="senha">Senha</label><br><br>
                   <input type="text" name="senha" id="senha" placeholder="Senha" class="inputUser" value="<?php echo $senha  ?>" required>
                   
               </div><br>
               <div class="inputBox">
                   <label for="nome">Email</label><br><br>
                   <input type="email" name="email" id="email" placeholder="Email" class="inputUser" value="<?php echo $email  ?>" required>
                   
               </div><br>
               <div class="inputBox">
                   <label for="sexo">Sexo:</label><br><br>
               <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
               <label for="feminino">Feminino</label><br>
           
               <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
               <label for="masculino">Masculino</label><br>

               <input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
               <label for="outro">Outro</label>
               <br>
               </div>
               
               <br><br>
               <div class="inputBox">
                   <label for="data_nascimento">Data de Nascimento:</label>
                   <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" value="<?php echo $data_nasc ?>" required>
               </div>
               <br><br><br>
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="submit" name="update" id="update">
               
           </fieldset>
       </form>
   </div>
</body>
</html>