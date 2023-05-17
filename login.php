<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

        body {
            background-color: #03001C;
            font-family: 'Noto Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .left-login-image {
            width: 300px; /* Ajuste o tamanho conforme necessário */
            margin-bottom: 20px;
        }

        .welcome-message {
            color: #C147E9;
            margin-bottom: 20px;
        }

        .textfield {
            width: 100%;
            margin-bottom: 20px;
        }

        .textfield > input {
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 15px;
            background: #1500d6;
            color: #e8e5ff;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #0f0099;
            box-sizing: border-box;
        }

        .textfield > label {
            color: #e8e5ff;
            margin-bottom: 10px;
        }

        .textfield > input::placeholder {
            color: #f0ffff94;
        }

        .inputSubmit {
            width: 100%;
            padding: 15px 0px;
            margin: 1px;
            border: none;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #10009e;
            background: #C147E9;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #0f0099;
        }

        @media only screen and (max-width: 600px) {
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

body {
background-color: #03001C;
font-family: 'Noto Sans', sans-serif;
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
margin: 0;
}

.container {
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
text-align: center;
padding: 20px;
}

.left-login-image {
width: 300px; /* Ajuste o tamanho conforme necessário */
margin-bottom: 20px;
}

.welcome-message {
color: #C147E9;
margin-bottom: 20px;
}

.textfield {
width: 100%;
margin-bottom: 20px;
}

.textfield > input {
width: 100%;
border: none;
border-radius: 10px;
padding: 15px;
background: #1500d6;
color: #e8e5ff;
font-size: 12pt;
box-shadow: 0px 10px 40px #0f0099;
box-sizing: border-box;
}

.textfield > label {
color: #e8e5ff;
margin-bottom: 10px;
}

.textfield > input::placeholder {
color: #f0ffff94;
}

.inputSubmit {
width: 100%;
padding: 15px 0px;
margin: 1px;
border: none;
border-radius: 8px;
text-transform: uppercase;
font-weight: 800;
letter-spacing: 3px;
color: #10009e;
background: #C147E9;
cursor: pointer;
box-shadow: 0px 10px 40px -12px #0f0099;
}
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="arvore.svg" class="left-login-image" alt="Arvore">
        <div>
            <h1 class="welcome-message">Bem-vindo de volta</h1>
            <form action="teste.php" method="POST">
        <div class="card-login">
            <h1> LOGIN</h1>
        </div>
                
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="email">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <input class="inputSubmit" type="submit" name="submit" value="Login">
                    </form>
                    <br>
                    <button onclick="window.location.href ='registro.php'" class="inputSubmit">Ainda não tem conta? Cadastre-se</button>
                    </div>
                    </div>
                    
                    </body>
                    </html>