<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."login");
        die();
    }

    // check $_GET['type'] and get the right packages

    // temporary reading from JSON file
    $file = $BASE_URL."tmp-data/encomendas.json";
    $encomendas = json_decode(file_get_contents($file), true);

    // send data to smarty
    $smarty->assign('encomendas', $encomendas);
    $smarty->assign('type', $_GET['type']);

    // display smarty template
    $smarty->display('encomendas/list.tpl');
?>
