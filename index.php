
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles4.css">
    <script src="index.js"></script>
  </head>
  <body style="background-color: hsl(211, 44%, 33%)">
    <div class="content">
      <img src="profile.png"></image>
      <input type="file" name="" id="file" accept="image/*">
      <button for="file">Mudar foto de perfil</button>
    </div>
    <div class="cadastro">
      <div class="container">
        <form action="/action_page.php" name="Formulario">
          <div class="row">
            <div class="col-15">
              <label for="fname">Nome:</label>
            </div>
            <div class="col-25">
              <input type="text" id="fname" name="Nome" placeholder="Nome" ValidaForm()>
            </div>
          </div>
          <div class="row">
            <div class="col-15">
              <label for="lname">Sobrenome:</label>
            </div>
            <div class="col-25">
              <input type="text" id="lname" name="sobrenome" placeholder="Sobrenome" ValidaForm()>
            </div>
          </div>
          <div class="row">
            <div class="col-15">
              <label for="country">País:</label>
            </div>
            <div class="col-30">
              <select id="country" name="country">
                <option value="disabled"></option>
                <option value="brasil">Brasil</option>
                <option value="canada">Canada</option>
                <option value="eua">EUA</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-15">
              <label for="subject">Sobre:</label>
            </div>
            <div class="col-75">
              <textarea id="subject" name="subject" placeholder="Sobre" style="height:200px"></textarea>
            </div>
          </div>
          <br>
          <div class="row">
            <input type="button" value="Salvar" onclick="javascript:ValidaForm()">
          </div>
        </form>
      </div>
      <div class="sidenav">
        <a href="inicial.html">Página Inicial</a>
        <a href="registro.php">Meu Perfil</a>
        <a href="#">Configurações</a>
      </div>
    </div>
  </body>
</html>