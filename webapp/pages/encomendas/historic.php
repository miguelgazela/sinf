<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

	$packages_entregues = null;
	$packages_pagas = null;
	// calling our api
	$api_url = null;

        
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasentregues/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasentregues';
	}
	
	$packages_entregues = json_decode(file_get_contents($api_url), true);
	
	foreach($packages_entregues as &$package) 
	{
		$package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
		$package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
		$package['numProdutos'] = count($package['ListaArtigos']);
		$package['Estado'] = "em progresso";

		if($package['perEntrega'] < 100) {
			$package['Estado'] = "entrega parcial";
		}
	}
	
	
	
	
	
	
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendaspagas/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendaspagas';
	}
	
	$packages_pagas = json_decode(file_get_contents($api_url), true);
	
	foreach($packages_pagas as &$package) 
	{
		$package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
		$package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
		$package['numProdutos'] = count($package['ListaArtigos']);
		$package['Estado'] = "em progresso";

		if($package['perEntrega'] < 100) {
			$package['Estado'] = "entrega parcial";
		}
	}
	



    // send data to smarty and display it
    $smarty->assign('packages_entregues', $packages_entregues);
	$smarty->assign('packages_pagas', $packages_pagas);
    $smarty->display('encomendas/historic.tpl');
?>
