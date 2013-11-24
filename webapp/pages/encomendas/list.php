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
    $packages = json_decode(file_get_contents($file), true);

    foreach($packages as &$package) {
        $package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
        $package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
        $package['numProdutos'] = count($package['LinhasDoc']);
    }

    // send data to smarty and display it
    $smarty->assign('packages', $packages);
    $smarty->assign('type', $_GET['type']);
    $smarty->display('encomendas/list.tpl');
?>
