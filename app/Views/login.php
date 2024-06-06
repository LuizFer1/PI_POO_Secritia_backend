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
            <?php if (session()->getFlashdata('error')): ?>
            <div><?= var_dump(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>
            <div class="FormLogin">
                <form action="<?= base_url('user/process') ?>" method="post">
                    <h3>LOGIN</h3>
                    <div>
                        <label>
                            <img src="<?= base_url('assets/img/perm_identity.svg'); ?>" alt="Icone de usuário">
                        </label>
                        <input name="email" type="email" placeholder="Email Institucional">
                    </div>
                    <div>
                        <label>
                            <img src="<?= base_url('assets/img/lock_outline.svg'); ?>" alt="Icone de usuário">
                        </label>
                        <input name="password" type="password" placeholder="Senha">
                    </div>
                    <p>Esqueceu a senha?</p>
                    <button>Entrar</button>
                    <a href="<?= base_url('user/registro') ?>">Clique aqui para fazer seu cadastro!</a>
                </form>
            </div>
        </div>

    </div>

</body>

</html>