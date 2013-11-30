<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

    // check $_GET['id'] and get the right package from our API

    // temporary reading from JSON file
    $file = $BASE_URL."tmp-data/encomendas.json";
    $packages = json_decode(file_get_contents($file), true);
    $package = $packages[0];
    $package['perEntrega'] = round($package['perEntrega']+0);
    $package['numProdutos'] = count($package['ListaArtigos']);
    $products = $package['ListaArtigos'];

    // send data to smarty and display template
    $smarty->assign('package', $package);
    $smarty->assign('products', $products);
    $smarty->display('encomendas/view.tpl');
?>
