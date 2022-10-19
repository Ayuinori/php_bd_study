<?php

// verificar se existe um post 

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('acesso negado');
}

$id_contato = $_POST['id_contato'];
$nome = $_POST['text_name'];
$telefone = $_POST['telefone'];

// now i need open my db 
require_once('inc/config.php');
require_once('inc/EasyPDO.php');
// ligar a minha base de dados 
$pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

$parametros = [
    ':id_contato'=> $id_contato,
    ':nome'=> $nome,
    ':telefone'=> $telefone,
];

$pdo->query('UPDATE dados  SET nome = :nome, telefone = :telefone WHERE id_contato = :id_contato', $parametros);

echo 'Concluido';

?>
<br>
<h3>Contato alterado com sucesso</h3>
<a href="ver_contactos.php">voltar</a>
