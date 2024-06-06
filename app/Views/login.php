<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Secritia - Login</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/global.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/login.css'); ?>">
</head>

<body>
    <div id="root" class="App">
        <div class="LoginParent">
            <div class="Title">
                <h1>SECRITIA</h1>
                <h2>REDE CORPORATIVA</h2>
            </div>
            <div class="FormLogin">
                <form action="<?= base_url('user/process') ?>" method="post">
                    <h3>LOGIN</h3>
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
                        <input name="password" type="password" placeholder="Senha">
                    </div>
                    <p>Esqueceu a senha?</p>
                    <button>Entrar</button>
                    <a href="<?= base_url('user/registro') ?>">Clique aqui para fazer seu cadastro!</a>
                </form>
                <?php if (session()->getFlashdata('error')): ?>
                    <div><?php 
                        if(is_array(session()->getFlashdata('error')) || is_object(session()->getFlashdata('error'))){
                            foreach(session()->getFlashdata('error') as $a){
                                echo "<br>";
                                echo $a;
                            } 
                        }
                        
                        else{
                            echo "<br>";
                            echo session()->getFlashdata('error');
                        }
                    ?></div>
                <?php endif; ?>
            </div>
        </div>

    </div>

</body>

</html>