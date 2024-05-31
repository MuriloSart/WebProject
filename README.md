# WebProject
 Register Games Site Prototype

# Baixe o XAMPP e crie o banco de dados para utilizar
 Para que haja algo com que o banco se conecte de forma correta, por favor, utilize o seguinte código SQL:

-- Criar o banco de dados
CREATE DATABASE clientes_db;

-- Usar o banco de dados criado
USE clientes_db;

-- Criar a tabela clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf_cnpj VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);
