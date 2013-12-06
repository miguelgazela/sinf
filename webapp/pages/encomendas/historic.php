<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

    $packages = Null;

    
        // temporary reading from JSON file
        // $file = $BASE_URL."tmp-data/encomendas.json";
        // $packages = json_decode(file_get_contents($file), true);

         // calling our api
        $api_url = Null;

        if($_SESSION['s_userType'] == "CLIENT") {
            $api_url = $BASE_URL_PRIMAVERA . 'encomendasentregues/'.$_SESSION['s_id'];
        } else { // MANAGER
            $api_url = $BASE_URL_PRIMAVERA . 'encomendasentregues';
        }

        $packages = json_decode(file_get_contents($api_url), true);
    


    foreach($packages as &$package) {
        $package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
        $package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
        $package['numProdutos'] = count($package['ListaArtigos']);
        $package['Estado'] = "em progresso";

        if($package['perEntrega'] < 100) {
            $package['Estado'] = "entrega parcial";
        }
    }


    // send data to smarty and display it
    if($_GET['type'] == "active") {
        $_SESSION['counterEncomendasAtivas'] = count($packages);
        $smarty->assign('counterEncomendasAtivas', count($packages));
    } else {
         $smarty->assign('counterEncomendasAtivas', $_SESSION['counterEncomendasAtivas']);
    }
    $smarty->assign('packages', $packages);
    $smarty->display('encomendas/historic.tpl');
?>
