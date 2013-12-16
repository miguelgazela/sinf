<?php
    // initialize
    include_once('../../common/init.php');

     if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }
	
	$api_url = $BASE_URL_PRIMAVERA . 'historico/'.$_SESSION['s_id'];
	$artigos = json_decode(file_get_contents($api_url), true);

    $smarty->assign('artigos', $artigos);
	
	$smarty->display('encomendas/suggestions.tpl');
?>