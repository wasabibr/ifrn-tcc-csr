<?php

// Credenciais do banco de dados usuario: 
// Estamos assumindo que você está executando o servidor MySQL
// com configuração padrão (usuário 'root' com  senha em branco)
$usuario = 'root';
$senha = '';
$database = 'dbcsr';
$host = 'localhost';

// Tentativa de se conectar ao banco de dados MySQL
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Checando conexão
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}