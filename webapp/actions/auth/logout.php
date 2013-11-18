<?php
    include_once('../../common/init.php');

    session_destroy();
    // $_SESSION['s_ok'] = 'Logged Out';

    echo "Logout efetuado com sucesso!";
?>
