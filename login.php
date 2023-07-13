<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/login.css">
        <script src="https://accounts.google.com/gsi/client" async defer></script> <!-- google -->
        <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script> <!-- google -->
    </head>
    <body>
    
        <div class="gif">
            <a href="./index.php"><img src="./img/gif/camiao1.gif"></a>
        </div>

        <form action="./login_user.php" method="POST" class="container" autocomplete="off">

        <div class="login">
            <h1>Login</h1>
        </div>

        <div>
            <p>Email</p>
            <input placeholder="Digite o seu Email"  type="text" size="35" maxlength="256" class="email" name="email" pattern="[a-z0-9._%+-]{1,}@[a-z0-9.-]{2,}\.[a-z]{2,}" required>
        </div>

        <div>
            <p>Senha</p>
            <input placeholder="Digite a sua Password" type="password" size="35" maxlength="30" class="password" name="senha" required>
        </div>
        
        <div class="saver">
            <input value="checkbox" type="checkbox" name="checkbox" id="checkbox" class="checkbox">
            <label for="checkbox" class="checkmark">Lembrar da senha</label><br><br>
        </div>
        
        <div>
            <a class="esquecer" href="./pedir_email.php">Esqueceu a sua password?</a>
        </div>
            <input type="submit" value="Login" class="button-submit" name="button-submit" id="button-submit">
        
            <div class="register">
                <p>Não tem uma conta? <a href="./register.php">Faça register</a></p>
            </div>

            <div id="buttonDiv"></div> 
        </form>

    <script src="./js/google_login.js"></script> <!-- google -->

    </body>
</html>