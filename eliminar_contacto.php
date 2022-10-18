<?php
    if(!isset($_GET['id'])){
        die('acesso negado');
    }


    $id_contato = $_GET['id'];

// add my elements to a db ...
require_once('inc/EasyPDO.php');
require_once('inc/config.php');

$pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);
$parametros = [
    ':id_contacto' => $id_contato
];

$pdo-> query("DELETE FROM dados WHERE id_contato = :id_contacto", $parametros);

?>

<h5>contato eliminado com sucesso</h5>
<div>
    <a href="index.php">back</a>
</div>