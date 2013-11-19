<?php
    // initialize
    include_once('../../common/init.php');

    /*if(isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."encomendas/ativas");
        die();
    }

    die("You need to login");*/

    // display smarty template
    $smarty->display('auth/login.tpl');
?>
