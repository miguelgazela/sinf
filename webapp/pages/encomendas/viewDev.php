<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

    // check $_GET['id'] and get the right package from our API
    if(isset($_GET['id'])){

        $id = $_GET['id'];

        //$file = $BASE_URL."tmp-data/encomendas.json";
        $api_url = $BASE_URL_PRIMAVERA."encomendadevolvida/".$id;
        $package = json_decode(file_get_contents($api_url), true);
        $package['perEntrega'] = round($package['perEntrega']+0);
        $package['numProdutos'] = count($package['ListaArtigos']);
        $products = $package['ListaArtigos'];

        // send data to smarty and display template
        $smarty->assign('package', $package);
        $smarty->assign('products', $products);
        $smarty->display('encomendas/viewDev.tpl');
    } else {
        echo "Falta ID da encomenda";
        die();
    }

    
?>
