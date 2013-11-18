<?php
    // initialize
    include_once('../../common/init.php');

    // check $_GET['type'] and get the right packages

    // temporary reading from JSON file
    $file = $BASE_URL."tmp-data/encomendas.json";
    $encomendas = json_decode(file_get_contents($file), true);

    // send data to smarty
    $smarty->assign('encomendas', $encomendas);

    // display smarty template
    $smarty->display('encomendas/list.tpl');
?>
