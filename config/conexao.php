<!-- Crie o banco de dados escola e a tabela alunos executando este SQL no MySQLAdmin:

CREATE DATABASE IF NOT EXISTS escola;
USE escola;

CREATE TABLE IF NOT EXISTS alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    curso VARCHAR(100) NOT NULL,
    ativo TINYINT(1) DEFAULT 1); 
-->


<?php
//Crie a conexão com o banco de dados usando PDO($pdo = new PDO)


try{
    $pdo = new PDO("mysql:host=localhost;port=123;dbname=escola", "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erro ao conectar com o banco de dados:" .$e->getMessage();
}   
    
?>