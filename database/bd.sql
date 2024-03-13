CREATE TABLE loja(
    codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    endereco VARCHAR(50) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cnpj INT(14) NOT NULL
); CREATE TABLE produto(
    codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cod_loja INT NOT NULL,
    FOREIGN KEY (cod_loja) REFERENCES loja(codigo),
    nome VARCHAR(50) NOT NULL,
    preco DECIMAL NOT NULL,
    quantidade INT NOT NULL
);
