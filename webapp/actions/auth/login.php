<?php
	include_once('../../common/init.php');
	header('Content-Type: application/json');

	$nif = $_POST["nif"];
	$password = $_POST["pass"];

	$api = file_get_contents("http://localhost:49499/api/clientes/" . $nif . "/" . $password);
	$user = json_decode($api, true);

	if($user) {
		$_SESSION['s_id'] = $user['CodCliente'];
   		$_SESSION['s_nif'] = $user['NumContribuinte'];
   		$_SESSION['s_nome'] = $user['NomeCliente'];

   		if($user['Tipo'] == 1) {
   			$_SESSION['s_userType'] = 'CLIENT';
   		} else {
   			$_SESSION['s_userType'] = 'MANAGER';
   		}
		echo json_encode(array('result' => 'OK')); // TODO get the type of user !!!
	} else {
		echo json_encode(array('result' => 'NOK'));
	}
	
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasaentregar/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasaentregar';
	}
	
	$packages_aentregar = json_decode(file_get_contents($api_url), true);

	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasanuladas/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasanuladas';
	}
	
	$packages_anuladas = json_decode(file_get_contents($api_url), true);
	
	
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasprocessamento/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasprocessamento';
	}
	
	$packages_processamento = json_decode(file_get_contents($api_url), true);
	
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasentregues/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasentregues';
	}
	
	$packages_entregues = json_decode(file_get_contents($api_url), true);
	
	if($_SESSION['s_userType'] == "CLIENT") {
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasativasdevolvidas/'.$_SESSION['s_id'];
	} else { // MANAGER
		$api_url = $BASE_URL_PRIMAVERA . 'encomendasativasdevolvidas';
	}
	
	$packages_devolvidasAtivas = json_decode(file_get_contents($api_url), true);
	
	
	$_SESSION['counterEncomendasEntregues'] =  count($packages_entregues);
	$_SESSION['counterEncomendasDevolvidas'] =  count($packages_devolvidasAtivas);
	$_SESSION['counterEncomendasAtivas'] =  count($packages_anuladas) +  count($packages_aentregar) + count($packages_processamento);
?>