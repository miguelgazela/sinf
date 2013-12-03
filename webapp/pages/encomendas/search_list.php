<?php
	// initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }
	
	// Tratar da encomenda
	$start = "";
	
	$codEncomenda = $_POST['codEncomenda'];
	if($codEncomenda == "")
	{
		$codEncomenda = "none";
	}
	
	$start = $start . $codEncomenda . '___';
	
	// Tratar da data de inicio
	$dataInit = $_POST['dateInit'];
	if($dataInit == "")
	{
		$dataInit = "none";
	}
	
	$start = $start . $dataInit . '___';
	
	// Tratar da data de fim
	$dataFinal= $_POST['dateEnd'];
	if($dataFinal == "")
	{
		$dataFinal = "none";
	}
	
	$start = $start . $dataFinal . '___';
	
	// Tratar dos artigos
	$artigos = "";
	
	$var_i = 0;
	$api_urlArt = $BASE_URL_PRIMAVERA . 'artigos';
	$artigosArr = json_decode(file_get_contents($api_urlArt), true);
	
	foreach($artigosArr as $artigo)
	{
		$codArtigoAux = $artigo['codArtigo'];
		$codArtigo = str_replace('.', '_', $codArtigoAux);
		
		if(isset($_POST[$codArtigo]))
		{
			if($var_i == 0)
			{
				$artigos = $artigo['descricaoArtigo'];
				$var_i++;
			}
			else
			{
				if($artigos == "")
				{
					$artigos = $artigo['descricaoArtigo'];
				}
				else
				{
					$artigos = $artigos . '_' . $artigo['descricaoArtigo'];
				}
			}
		}
	}
	
	if($artigos == "")
	{
		$artigos = "none";
	}
	
	$start = $start . $artigos . '___';
	
	// Tratar do preco
	$preco = $_POST['price'];
	if($preco == "")
	{
		$preco = "none";
	}
	
	$start = $start . $preco . '___';
	
	// Tratar da morada
	$morada = $_POST['address'];
	if($morada == "")
	{
		$morada = "none";
	}
	
	$start = $start . $morada . '___';
	
	// Tratar da quantidade
	$quantAux = $_POST['quantidade'];
	if($quantAux == "")
	{
		$quant = "none";
	}
	else
	{
		$quant = "" . $quantAux . "";
	}
	
	$startAux = $start . $quant;
	$start = str_replace(' ', '________', $startAux);

    $api_url = null;

    if($_SESSION['s_userType'] == "CLIENT") {
            $api_url = 'http://localhost:49499/api/pesquisaavanencomendas/'.$_SESSION['s_id'].'/' . $start;
        } else { // MANAGER
            $api_url = 'http://localhost:49499/api/pesquisaavanencomendas/' . $start;
        }
		
    $packages = json_decode(file_get_contents($api_url), true);
	
	foreach($packages as &$package) {
        $package['DataInicio'] = UtilFunctions::prettyDate($package['DataInicio']);
        $package['DataFim'] = UtilFunctions::prettyDate($package['DataFim']);
        $package['numProdutos'] = count($package['ListaArtigos']);
        $package['Estado'] = "em progresso";

        foreach($package['ListaArtigos'] as $product) {
            if($product['estadoEntrega'] == "P") {
                $package['Estado'] = "entrega parcial";
                break;
            }
        }
    }

    // send data to smarty and display it
    $smarty->assign('packages', $packages);
	$smarty->display('encomendas/searchList.tpl');

?>