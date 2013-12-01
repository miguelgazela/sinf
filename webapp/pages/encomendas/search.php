<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login");
        die();
    }

    // display smarty template
    $smarty->display('encomendas/search.tpl');
?>
