<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/home.css">
    <title>CalendarioTarefas</title>
</head>
<body>
    <main class="mainContainer">
        <section class="mainLeft"> 
            <p>colocar foto aqui</p>
        </section>
        <section class="mainRight">
            <div class="cadastroContainer">
                <form action="http://localhost/TarefasPHP/login" class="formContainer">
                    <label for="login">Login</label>
                    <input id="login" name="login" type="text" class="inputUser">
                    <label for="senha">Senha</label>
                    <input id="senha" name="senha" type="password" class="inputUser">
                    <input type="submit" value="Entrar">
                    <div class="buttonCadastro">
                        <p class="buttonTextCadastro">Criar Conta</p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <section class="modal modalOff">
        <div class="modalContainer">
            <section class="formModalContainer">
                <form class="formModal" action="http://localhost/TarefasPHP/cadastro" method="POST">
                    <label for="nameConta">Login</label>
                    <input name="login" id="nameConta" type="text">
                    <label for="passwordConta">Password</label>
                    <input name="password" id="passwordConta" type="password">
                    <label for="passwordRe">Password Repeat</label>
                    <input id="passwordRe" type="password">
                    <input type="submit" value="Criar">
                </form>
            </section>
        </div>
    </section>
    <script src="public/js/home.js"></script>
</body>
</html>