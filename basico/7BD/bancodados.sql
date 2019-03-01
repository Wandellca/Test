-- Criado um banco de dados
-- CREATE DATABASE banphp7
-- DEFAULT CHARACTER SET utf8
-- DEFAULT COLLATE utf8_general_ci;
USE banphp7;
-- Criando uma tabela
CREATE TABLE usuarios(
idusuario  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
login      VARCHAR(64) NOT NULL,
senha      VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
)DEFAULT CHARSET= utf8;
-- Inserindo dados na tabela
INSERT INTO usuarios (login,senha) VALUES ('admin','123');
-- Selecionar a tabela usuarios 
SELECT *FROM usuarios; 
-- Autolizar a tabela usuarios 
UPDATE usuarios SET senha = '321' WHERE idusuario = 1 ;
-- Deletar dados da tabela
DELETE FROM usuarios WHERE idusuario = 1;
-- Apagar a tabela 
TRUNCATE TABLE usuarios;