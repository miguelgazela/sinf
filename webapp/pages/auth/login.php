<?php
    // initialize
    include_once('../../common/init.php');

    //session_destroy();
    $_SESSION['session_id'] = 1;

    if(isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."pages/encomendas/list.php?type=active");
        die();
    }

    // display smarty template
    $smarty->display('auth/login.tpl');
?>
