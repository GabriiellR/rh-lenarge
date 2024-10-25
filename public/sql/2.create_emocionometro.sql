CREATE TABLE emocionometro (

id int primary key AUTO_INCREMENT primary key UNIQUE,
setor_id int,
emocao int,
descricao_emocao VARCHAR(70),
data_resposta DATETIME,


FOREIGN KEY (setor_id) REFERENCES setores(id)
)