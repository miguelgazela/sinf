<?php
    // initialize
    include_once('../common/init.php');

    // if(!isset($_SESSION['session_id'])) {
    //     header("Location: $BASE_URL"."login");
    //     die();
    // }

    // display smarty template
    $smarty->display('calendar.tpl');
?>
