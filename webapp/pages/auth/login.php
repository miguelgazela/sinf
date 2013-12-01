<?php
    // initialize
    include_once('../../common/init.php');

    //session_destroy();
    //$_SESSION['session_id'] = 1;


    // display smarty template
    $smarty->display('auth/login.tpl');
?>