<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form name="cadastrar" method="POST" action="provapweb.php">

            <label>Nome:</label><br/>
            <input type="text" name="nome" size="40"  maxlength="30"><br/><br/>

            <label>Telefone:</label><br/>
            <input type="text" name="telefone" size="40"  maxlength="30"><br/><br/>

            <input type="submit" value="Cadastrar">
        </form>
    </body>

</html>
