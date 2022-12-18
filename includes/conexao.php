<?php

// Credenciais do banco de dados usuario: 
// Estamos assumindo que você está executando o servidor MySQL
// com configuração padrão (usuário 'root' com  senha em branco)
$host = 'localhost';
$database = 'db_csr';
$usuario = 'root';
$senha = '';

// Tentativa de se conectar ao banco de dados MySQL
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Checando conexão
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}