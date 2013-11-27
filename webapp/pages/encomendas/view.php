<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."login");
        die();
    }

    // check $_GET['id'] and get the right package from our API

    // temporary reading from JSON file
    $file = $BASE_URL."tmp-data/encomendas.json";
    $packages = json_decode(file_get_contents($file), true);

    // send data to smarty and display template
    $smarty->assign('package', $packages[0]);
    $smarty->display('encomendas/list.tpl');
?>
