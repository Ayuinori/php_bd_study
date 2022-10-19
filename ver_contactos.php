<?php
//criar instancia da minha classe pdo


require_once('inc/config.php');
require_once('inc/EasyPDO.php');
// ligar a minha base de dados 
$pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);
// now all i have to do is search my contactos from my db

$contactos =     $pdo->query('SELECT * FROM dados');


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver contactos</title>
</head>

<body>
    <h3>Avaible contactos</h3>
    <hr>
    <table border='1'>
        <thead>
            <tr>
                <th>Nomes</th>
                <th>Telefones</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($contactos as $contato) : ?>
                <tr>
                    <td><?= $contato['nome']?></td>
                    <td><?=$contato['telefone']?></td>

                    <td><a href="editar_contacto.php?id=<?= aes_encrypt($contato ['id_contato'])?>">Edit</a></td>

                    <td><a href="eliminar_contacto.php?id=<?= aes_encrypt($contato ['id_contato'])?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <div>
        <a href="index.php">voltar</a>

    </div>
</body>
</html>
           

