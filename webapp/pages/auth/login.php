<?php
    // initialize
    include_once('../../common/init.php');

    if(isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/encomendas/list.php?type=active");
        die();
    }

    // display smarty template
    $smarty->display('auth/login.tpl');
?>