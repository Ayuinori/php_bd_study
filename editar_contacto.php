<?php

//verifica se o id existe
if (!isset($_GET['id'])) {
    die('Acesso negado');
};


$id_contacto = $_GET['id'];
//adicionar base de dados

require_once('inc/config.php');
require_once('inc/EasyPDO.php');
// ligar a minha base de dados 
$pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

$parametros =[
    ':id_contacto' => $id_contacto
];

$contacto = $pdo->query('SELECT * FROM dados WHERE id_contato = :id_contacto', $parametros)[0];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contacto</title>
</head>

<body>

    <form action="editar_contactos_submit.php" method="post">
        <! -- which contact i will edit?? -->
        <input type="hidden" name="id_contato" value="<?= $id_contacto?>">
        <div>
            <label>Nome:</label>
            <input type='text' name='text_name' maxlenght='50' value="<?= $contacto['nome']?>">
        </div>

        <div>
            <label>Telefone:</label>
            <input type='text' name='telefone' maxlenght='20' value="<?= $contacto['telefone']?>">
        </div>
        <div>
            <input type='submit' value="Guardar">
        </div>
        <div>
            <a href='ver_contactos.php'>Cancelar</a>
        </div>
    </form>

</body>

</html>