<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

	$packages_aentregar = null;
	$packages_anuladas = null;
	$packages_processamento = null;
	// calling our api
	$api_url = null;

	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasaentregar/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasaentregar';
	}
	
	$packages_aentregar = json_decode(file_get_contents($api_url), true);
	
	foreach($packages_aentregar as &$package) 
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
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasanuladas/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasanuladas';
	}
	
	$packages_anuladas = json_decode(file_get_contents($api_url), true);
	
	foreach($packages_anuladas as &$package) 
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
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasprocessamento/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasprocessamento';
	}
	
	$packages_processamento = json_decode(file_get_contents($api_url), true);
	
	foreach($packages_processamento as &$package) 
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
    $_SESSION['counterEncomendasAtivas'] =  count($packages_anuladas) +  count($packages_aentregar) + count($packages_processamento);
	$smarty->assign('packages_anuladas', $packages_anuladas);
	$smarty->assign('packages_processamento', $packages_processamento);
	$smarty->assign('packages_aentregar', $packages_aentregar);
    $smarty->display('encomendas/list.tpl');
?>
