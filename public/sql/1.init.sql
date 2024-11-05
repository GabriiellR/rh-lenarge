CREATE TABLE departamentos (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255)
);
CREATE TABLE funcoes (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255)
);
CREATE TABLE segmentos (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255)
);
CREATE TABLE setores (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255)
);
CREATE TABLE subsetores (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255),
    setor_id INT,
    FOREIGN KEY (setor_id) REFERENCES setores(id)
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    matricula INT,
    nome VARCHAR(255),
    login VARCHAR(255),
    senha VARCHAR(255),
    data_admissao DATE,
    departamento_id INT,
    funcao_id INT,
    segmento_id INT,
    setor_id INT,
    gestor_id INT,
    administrador BOOLEAN,
    redefinir_senha BOOLEAN,
    ativo BOOLEAN,
    FOREIGN KEY (departamento_id) REFERENCES departamentos(id),
    FOREIGN KEY (funcao_id) REFERENCES funcoes(id),
    FOREIGN KEY (segmento_id) REFERENCES segmentos(id),
    FOREIGN KEY (setor_id) REFERENCES setores(id),
    FOREIGN KEY (gestor_id) REFERENCES usuarios(id)
);

CREATE TABLE avaliacoes (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    titulo VARCHAR(255)
);

CREATE TABLE questoes (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    pergunta VARCHAR(255),
    criterio VARCHAR(255)
);


CREATE TABLE avaliacoes_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    avaliador_id INT,
    concluido BOOLEAN,
    data_realizacao DATETIME,
    avaliacao_id INT,
    data_limite_inicio DATETIME,
    data_limite_fim DATETIME,
    publico BOOLEAN,
    FOREIGN KEY (avaliador_id) REFERENCES usuarios(id),
    FOREIGN KEY (avaliacao_id) REFERENCES avaliacoes(id)
);

CREATE TABLE avaliacao_questoes (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
    avaliacao_id INT,
    criterio INT,
    questao_id INT,
    FOREIGN KEY (avaliacao_id) REFERENCES avaliacoes(id),
    FOREIGN KEY (questao_id) REFERENCES questoes(id)
);

CREATE TABLE questao_opcoes (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    questao_id INT,
    descricao VARCHAR(255),
    correto TINYINT,
    FOREIGN KEY (questao_id) REFERENCES questoes(id)
);

CREATE TABLE usuario_respostas (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    usuario_id INT,
    opcao_escolhida_id INT,
    data_resposta DATETIME,
    justificativa TEXT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (opcao_escolhida_id) REFERENCES questao_opcoes(id)
);