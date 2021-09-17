<?php
    session_start();
    echo 'Os dados salvos na sessão são: Nome:'.$_SESSION['nome'].', Telefone:'.$_SESSION['telefone'];

?>
