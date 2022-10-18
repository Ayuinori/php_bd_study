

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contactos</title>
</head>
<body>
    <form action="adicionar_contactos_submit.php" method="post">
        <div>
            <label>Nome:</label>
            <input type='text' name='text_name' maxlenght='50'>
        </div>

        <div>
            <label>Telefone:</label>
            <input type='text' name='text_telefone' maxlenght='20'>
        </div>
        <div>
            <input type='submit' value="Guardar">
        </div>
        <div>
            <a href='index.php'>voltar</a>
        </div>
    </form>
</body>
</html>