<?php


// verify if it was a post request



if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('acesso negado');
    
}


 
// add my elements to a db ...
require_once('inc/EasyPDO.php');
require_once('inc/config.php');

$pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// parametros SQL injection prevented...
$parametros = [
    ':nome' => $_POST['text_name'],
    ':telefone'=> $_POST['text_telefone']
];

$pdo-> insert("INSERT INTO dados VALUES(0, :nome, :telefone)", $parametros);

echo 'ok';
?>
<div>
<a href='index.php'>back</a>
</div>