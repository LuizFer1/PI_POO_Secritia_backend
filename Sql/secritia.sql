use pi_poo_secritia;
-- Active: 1714930429643@@127.0.0.1@3306@pi_poo_secritia
CREATE TABLE Departamento (
    id_departamento  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    nome_departamento TEXT
);
CREATE TABLE Grupo (
    id_grupo  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    nome_grupo VARCHAR(50),
    id_departamento VARCHAR(36),
    Foreign Key (id_departamento) REFERENCES Departamento(id_departamento)
);
CREATE TABLE Usuario (
    id_usuario  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    nome_usuario VARCHAR(255),
    email_usuario VARCHAR(255),
    senha_usuario VARCHAR(255),
    cargo_usuario VARCHAR(50),
    is_admin TINYINT(1),
    is_ceo  TINYINT(1),
    is_leader TINYINT(1),
    created_at DATETIME,
    updated_at DATETIME,
    deleted_at DATETIME,
    id_grupo VARCHAR(36),
    Foreign Key (id_grupo) REFERENCES Grupo(id_grupo)
);

CREATE TABLE Publicacao (
    id_publicacao  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    id_usuario VARCHAR(36),
    titulo VARCHAR(255),
    descricao VARCHAR(255),
    conteudo VARCHAR(255),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Reacao (
    id_reacao  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    tipo CHAR(10),
    id_usuario VARCHAR(36),
    id_publicacao VARCHAR(36),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_publicacao) REFERENCES Publicacao(id_publicacao)
);

CREATE TABLE Comentario (
    id_comentario  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    id_publicacao VARCHAR(36),
    corpo TEXT,
    id_usuario VARCHAR(36),
    criado DATE,
    FOREIGN KEY (id_publicacao) REFERENCES Publicacao(id_publicacao),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Forum (
    id_forum  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    nome_forum TEXT
);

CREATE TABLE Mensagens (
    id_mensagens  VARCHAR(36) DEFAULT (UUID()) PRIMARY KEY,
    id_forum VARCHAR(36),
    criado DATETIME,
    id_usuario VARCHAR(36),
    corpo TEXT,
    FOREIGN KEY (id_forum) REFERENCES Forum(id_forum),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Pertence (
    id_usuario VARCHAR(36),
    id_forum VARCHAR(36),
    PRIMARY KEY (id_usuario, id_forum),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_forum) REFERENCES Forum(id_forum)
);
