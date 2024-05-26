<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Secritia - Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/global.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
</head>

<body>
    <div id="root" class="App">
        <div class="LoginParent">
            <div class="Title">
                <h1>SECRITIA</h1>
                <h2>REDE CORPORATIVA</h2>
            </div>
            <div class="FormLogin">
                <form action="<?= base_url('login') ?>" method="post">
                    <h3>LOGIN</h3>
                    <div>
                        <label>
                            <img src="assets/img/perm_identity.svg" alt="Icone de usuário">
                        </label>
                        <input type="email" placeholder="Email Institucional">
                    </div>
                    <div>
                        <label>
                            <img src="assets/img/lock_outline.svg" alt="Icone de usuário">
                        </label>
                        <input type="password" placeholder="Senha">
                    </div>
                    <p>Esqueceu a senha?</p>
                    <button>Entrar</button>
                    <a href="cadastro.html">Clique aqui para fazer seu cadastro!</a>
                </form>
            </div>
        </div>

    </div>

</body>

</html>