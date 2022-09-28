<?php
$servidor = 'mysql.prestosystem.com.br';
$usuario = 'prestosystem03';
$senha = 'M3D1C1NA0cupac10nal';
$bd = 'prestosystem03';
$conn = new mysqli($servidor, $usuario, $senha, $bd);

if ($conn->error) {
    die("404 sql: " . $conn->error);
}
