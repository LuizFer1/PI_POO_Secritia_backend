<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/feed.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/post.css'); ?>" />
    <title>SECRITIA - Home</title>
</head>

<body>
    <header>
        <div class="logo">
            <span>SECRITIA</span>
        </div>
        <div class="menu-central">
            <span><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                    </svg></a>
            </span>

            <span><a href="<?= base_url('/calendario') ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                        <path
                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                    </svg> </a></span>
            <span><a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg> </a></span>
        </div>
        <div class="menu-lateral">
            <div class="menu-tela-grande">
                <span><a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-flag-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                        </svg> </a></span>
                <span><a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                        </svg> </a></span>
                <span><a href="<?= base_url("user/logout") ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1z" />
                            <path
                                d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                        </svg></a></span>
            </div>
            <!-- Menu lateral-->
            <div class="menu-mobile">
                <span id="menuIcon" class="material-icons" onclick="openMenu()"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg></span>
                <div id="myMenu" class="menu">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
                    <span><a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-flag-fill" viewBox="0 0 16 16">
                                <path
                                    d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                            </svg> Nome da função </a></span>
                    <span><a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path
                                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                            </svg>Configurações</a></span>
                    <span><a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-power" viewBox="0 0 16 16">
                                <path d="M7.5 1v7h1V1z" />
                                <path
                                    d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                            </svg>Sair
                        </a></span>
                </div>
            </div>
        </div>
    </header>
    <div class="container_openmodal">
        <button class="openModal bt_publicacao m-2" onclick="openForm()">
            Criar Nova Publicação
        </button>
        <?php if (session()->user->is_leader == 1): ?>
        <button class="openModal bt_equipe m-2">
            Criar Nova Equipe
        </button>
        <?php else: ?>
        <?php endif; ?>
        <?php if (session()->user->is_ceo == 1): ?>
        <button class="openModal bt_departamento m-2" onclick="openMenuDepartamento()">
            Criar Novo Departamento
        </button>
        <button class="openModal bt_grupo m-2" onclick="openMenuGrupo()">
            Criar Novo Grupo
        </button>
        <?php else: ?>
        <?php endif; ?>
    </div>
    <main>
        <?php foreach ($publicacoes as $publicacao): ?>
        <div class="post">
            <div class="post-img">
                <img src="data:image/png;base64, <?= $publicacao['conteudo'] ?>" alt="" />
                <span class="titulo_pub"><?= $publicacao['titulo'];?></span>
            </div>
            <div class="post-actions">
                <div>
                    <form id="reaction-form"
                        action=<?php echo base_url("reactions/create/") . $publicacao['id_publicacao'] ?> method="post">
                        <span><button onclick="preventdefault()" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
                                </svg></button></span>
                    </form>
                    <span><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1" />
                            </svg></a></span>
                </div>
                <div>
                    <span><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg></a></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </main>
    <div id="modal-publicacao" class="modais-flutuantes">
        <form action="<?= base_url('publish/create') ?>" method="post" enctype="multipart/form-data">
            <button type="button" class="btn-close mb-2" data-bs-dismiss="modal" aria-label="Close"
                onclick="closeMenuPub()"></button>
            <div class="mb-2">
                <label for="titulo" class="mb-2">Titulo</label>
                <input name="titulo" type="text" style="width:100%;">
            </div>
            <div class="top-div">
                <h2 class="mb-2">Inserir novo post</h2>
                <textarea name="texto" placeholder="Insira o texto do post aqui..."></textarea>
            </div>
            <div class="bottom-div">
                <label for="input-file"><img
                        src=" <?= base_url('assets/img/paperclip-in-vertical-position_icon-icons.com_72966.svg') ?>"
                        alt="Adicionar Foto" class="photo-button">
                </label>
                <input type="file" class="input-file" id="input-file" name="input-file" style="display: none;">
                <button>Publicar</button>
            </div>
        </form>
    </div>


    <div class="modais-flutuantes" id="criarDepartamentoModal" style="display: none;"
        aria-labelledby="criarDepartamentoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close mb-2" data-bs-dismiss="modal" aria-label="Close"
                    onclick="closeMenuDepartamento()"></button>
                <div class="modal-header">
                    <h3 class="modal-title fs-5 mb-2" id="criarDepartamentoModalLabel">Criar Departamento</h3>
                </div>
                <div class="modal-body">
                    <form class="form-container form-roxo" action="<?= base_url('departament/add-departament') ?>"
                        method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="sigla" class="form-label">Sigla</label>
                            <input type="text" class="form-control" id="sigla" name="sigla" required>
                        </div>
                        <div>
                            <label for="leader" class="mb-2">Lider Do Departamento</label>
                            <select name="leader" id="leader" class="form-control" multiple>
                                <?php foreach ($leaders as $leader): ?>
                                <option value="<?= $leader->id_usuario?>"> <?= $leader->nome_usuario ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </form>
                </div>
                <div class="modal-footer mt-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="closeMenuDepartamento()">Cancelar</button>
                    <button type="submit" class="btn md-3 ms-2 btn-success botao-submit">Criar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modais-flutuantes" id="criarGrupoModal" style="display: none;" aria-labelledby="criarGrupoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close mb-2" data-bs-dismiss="modal" aria-label="Close"
                    onclick="closeMenuGrupo()"></button>
                <div class="modal-header">
                    <h3 class="modal-title fs-5 mb-2" id="criarGrupoModalLabel">Criar Grupo</h3>
                </div>
                <div class="modal-body">
                    <form class="form-container form-roxo" action="<?= base_url('grupo/add-grupo') ?>" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="sigla" class="form-label">Sigla</label>
                            <input type="text" class="form-control" id="sigla" name="sigla" required>
                        </div>
                        <div>
                            <label for="leader" class="mb-2">Lider Do Grupo</label>
                            <select name="leader" id="leader" class="form-control" multiple>
                                <?php foreach ($leaders as $leader): ?>
                                <option value="<?= $leader->id_usuario?>"> <?= $leader->nome_usuario ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </form>
                </div>
                <div class="modal-footer mt-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="closeMenuGrupo()">Cancelar</button>
                    <button type="submit" class="btn md-3 ms-2 btn-success botao-submit">Criar</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    function closeMenuDepartamento() {
        document.getElementById("criarDepartamentoModal").style.display = "none"
    }

    function closeMenuGrupo() {
        document.getElementById("criarGrupoModal").style.display = "none"
    }

    function closeMenuPub() {
        document.querySelector("#modal-publicacao").style.display = "none"
    }

    function openMenu() {
        document.getElementById("myMenu").style.left = "0";
    }

    function openMenuDepartamento() {
        document.getElementById("criarDepartamentoModal").style.display = "block"
    }

    function openMenuGrupo() {
        document.getElementById("criarGrupoModal").style.display = "block"
    }


    function closeMenu() {
        document.getElementById("myMenu").style.left = "-250px";
    }

    function openForm() {
        document.querySelector('#modal-publicacao').style.display = "block";
    }

    function preventdefault(e) {
        e.preventDefault()
    }
    </script>

</body>


</html>