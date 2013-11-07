<?php
	include_once('init.php');
    include_once($BASE_PATH.'database/encomendas.php');

    header('Content-Type: application/json');

    $encomendas = array(
        array("id" => 1, "title" => "title 1"),
        array("id" => 2, "title" => "title 2")
    );
    echo json_encode($encomendas);
?>