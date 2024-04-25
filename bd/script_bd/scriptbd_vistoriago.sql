CREATE DATABASE vistoriago;
USE vistoriago;

CREATE TABLE condutor (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(110) NOT NULL,
  cpf BIGINT(11) NOT NULL,
  rg BIGINT(9) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  endereco VARCHAR(150) NOT NULL,
  cnh BIGINT(11) NOT NULL,
  caminho_selfie_cnh VARCHAR(300) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE dados_veiculo (
    id INT NOT NULL AUTO_INCREMENT,
    placa VARCHAR(10) NOT NULL,
    chassi VARCHAR(17) NOT NULL,
    renavam BIGINT(11) NOT NULL,
    UF VARCHAR(2) NOT NULL,
    marca VARCHAR(45) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    km BIGINT(9) NOT NULL,
    nivel_combustivel VARCHAR(45) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE fotos_veiculo (
  id INT NOT NULL AUTO_INCREMENT,
  caminho_imagem_placa VARCHAR(300) NOT NULL,
  caminho_imagem_dianteira VARCHAR(300) NOT NULL,
  caminho_imagem_traseira VARCHAR(300) NOT NULL,
  caimho_imagem_hodometro VARCHAR(300) NOT NULL,
  caminho_imagem_banco_dianteiro VARCHAR(300) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE documentos (
  id INT NOT NULL AUTO_INCREMENT,
  data_registro VARCHAR(45) NOT NULL,
  id_dados_veiculo INT NOT NULL,
  id_condutor INT NOT NULL,
  id_fotos_veiculo INT NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_documentos_1 FOREIGN KEY (id_dados_veiculo) REFERENCES dados_veiculo(id),
  CONSTRAINT fk_documentos_2 FOREIGN KEY (id_condutor) REFERENCES condutor(id),
  CONSTRAINT fk_documentos_3 FOREIGN KEY (id_fotos_veiculo) REFERENCES fotos_veiculo(id)  
  );
  
  
  
select * from condutor;  
select * from dados_veiculo ;
select * from fotos_veiculo ;
select * from documentos;













