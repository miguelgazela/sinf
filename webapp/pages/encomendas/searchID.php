<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

    $api_url = null;

     if($_SESSION['s_userType'] == "CLIENT") {
            $api_url = 'http://localhost:49499/api/pesquisaavanencomendas/'.$_SESSION['s_id'].'/' . $_GET['searchIDInput'] . '___none___none___none___none___none___none';
        } else { // MANAGER
            $api_url = 'http://localhost:49499/api/pesquisaavanencomendas/' . $_GET['searchIDInput']. '___none___none___none___none___none___none';
        }
	
	//echo($api_url);
    $packages = json_decode(file_get_contents($api_url), true);

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
    $smarty->assign('packages', $packages);
	$smarty->display('encomendas/searchList.tpl');
?>