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
?>