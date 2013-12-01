<?php
	header('Content-Type: application/json');

	$nif = $_POST["nif"];
	$password = $_POST["pass"];

	$api = file_get_contents("http://localhost:49499/api/clientes/" . $nif . "/" . $password);
	$user = json_decode($api, true);

	if($user) {
		echo json_encode(array('result' => 'OK', 'typeUser' => 'CLIENT')); // TODO get the type of user !!!

	} else {
		echo json_encode(array('result' => 'NOK'));
	}
?>