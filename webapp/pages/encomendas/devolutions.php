<?php
	// initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

	$packages_devolvidas = null;
	// calling our api
	$api_url = null;

        
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasdevolvidas/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasdevolvidas';
	}
	
	$packages_devolvidas = json_decode(file_get_contents($api_url), true);
	
	foreach($packages_devolvidas as &$package) 
	{
		$package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
		$package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
		$package['numProdutos'] = count($package['ListaArtigos']);
		$package['Estado'] = "em progresso";

		if($package['perEntrega'] < 100) {
			$package['Estado'] = "entrega parcial";
		}
	}
	
	$smarty->assign('packages_devolvidas', $packages_devolvidas);
    $smarty->display('encomendas/devolutions.tpl');
?>