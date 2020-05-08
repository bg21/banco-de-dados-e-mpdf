<?php
    include('config.php');
    if(isset($_POST['enviado'])){
        $nome = $_POST['nome'];

        $inserir = \Conexao::conectar()->prepare("INSERT INTO users VALUES (null, ?)");
        $inserir->execute([$nome]);
        //Salvar no banco
        header('Location: '.INCLUDE_PATH.'gerarPDF.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" id="">
        <input type="submit" name="enviado" value="Finalizar">
    </form>
    
</body>
</html>