<?php
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['telefone']  = $_POST['telefone'];

    $username = "root";
    $password = "";
    
        $conn = new PDO("mysql:host=localhost;dbname=recuperacao", $username, $password);

        //$dados = $conn->query("SELECT * FROM ava2_pweb WHERE nome_usu".$conn->quote($usuario));

       $stmt = $conn->prepare("INSERT INTO usuarios (nome, telefone) VALUES (:nome, :telefone)");
       $stmt->bindParam(":nome", $_SESSION['nome']);
       $stmt->bindParam(":telefone", $_SESSION['telefone']);
       $stmt->execute();

       echo '<a href="verificar.php">Verificar da sessão</a>';

?>
