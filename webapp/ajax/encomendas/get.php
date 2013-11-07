<?php
	include_once('init.php');
    include_once($BASE_PATH.'database/encomendas.php');

    header('Content-Type: application/json');

    $encomenda = array("id" => $_GET['id'], "title" => "encomenda espectacular");
    echo json_encode($encomenda);
?>