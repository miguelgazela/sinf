<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login");
        die();
    }
	
	$api_url = $BASE_URL_PRIMAVERA . 'artigos';
	$artigos = json_decode(file_get_contents($api_url), true);
	
	$third = count($artigos)/7;
	$count = 0;
	$multi = 0;
	
    // display smarty template
	$smarty->assign('multi', $multi);
	$smarty->assign('count', $count);
	$smarty->assign('third', $third);
	$smarty->assign('artigos', $artigos);
    $smarty->display('encomendas/search.tpl');
?>
