<?php
    // initialize
    include_once('../../common/init.php');

    // if(!isset($_SESSION['session_id'])) {
    //     header("Location: $BASE_URL"."login");
    //     die();
    // }

    // tem que ir ver se o utilizador loggado é um cliente ou gerente e ir buscar as encomendas com isso

    $packages = Null;

    if($_GET['type'] == "active") {
        // temporary reading from JSON file
        $file = $BASE_URL."tmp-data/encomendas.json";
        $packages = json_decode(file_get_contents($file), true);

        // calling our api
        //$api_url = "http://localhost:49499/api/encomendas/";
        //$packages = json_decode(file_get_contents($api_url), true);
        
    } else if($_GET['type'] == "inactive") {
        // temporary reading from JSON file
        $file = $BASE_URL."tmp-data/encomendas.json";
        $packages = json_decode(file_get_contents($file), true);

        // calling our api
        //$api_url = "http://localhost:49499/api/encomendas/";
        //$packages = json_decode(file_get_contents($api_url), true);
    }

    foreach($packages as &$package) {
        $package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
        $package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
        $package['numProdutos'] = count($package['ListaArtigos']);
        $package['Estado'] = "em progresso";

        foreach($package['ListaArtigos'] as $product) {
            if($product['estadoEntrega'] == "P") {
                $package['Estado'] = "entrega parcial";
                break;
            }
        }
    }

    // send data to smarty and display it
    $smarty->assign('typeUser', 'manager');
    $smarty->assign('packages', $packages);
    $smarty->assign('type', $_GET['type']);
    $smarty->display('encomendas/list.tpl');
?>
