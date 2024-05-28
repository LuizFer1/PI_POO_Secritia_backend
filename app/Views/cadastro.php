<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Secritia - Cadastro</title>
    <link href="<?= base_url('public/assets/css/global.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/cadastro.css'); ?>">
</head>

<body>
    <div id="root" class="App">
        <div class="SigninParent">
            <div class="Title">
                <h1>SECRITIA</h1>
                <h2>REDE CORPORATIVA</h2>
            </div>
            <div class="FormCadastro">
                <form action="<?= base_url('user/create-user') ?>" method="post">
                    <h3>FAÇA SEU CADASTRO</h3>
                    <div>
                        <label>
                            <img src="<?= base_url('public/assets/img/perm_identity.svg'); ?>" alt="Icone de usuário">
                        </label>
                        <input name="email" type="email" placeholder="Email Institucional">
                    </div>
                    <div>
                        <label>
                            <img src="<?= base_url('public/assets/img/lock_outline.svg'); ?>" alt="Icone de usuário">
                        </label>
                        <input name="senha" type="password" placeholder="Crie sua senha">
                    </div>
                    <div>
                        <label>
                            <img src="<?= base_url('public/assets/img/lock_outline.svg'); ?>" alt="Icone de usuário">
                        </label>
                        <input name="senha" type="password" placeholder="Repita sua senha">
                    </div>
                    <button>Finalizar cadastro</button>
                    <a href="<?= base_url('user/login') ?>">Voltar</a>
                </form>
            </div>
        </div>

    </div>
</body>

</html>