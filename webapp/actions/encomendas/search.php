<?php
	// initialize
    include_once('../../common/init.php');
	
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
	
	if(isset($_POST['rosas']))
	{
		$artigos = "Rosas";
	}
	if(isset($_POST['tulipas']))
	{
		if($artigos == "")
		{
			$artigos = "Tulipas";
		}
		else
		{
			$artigos = $artigos . '_' . "Tulipas";
		}
	}
	if(isset($_POST['alecrim']))
	{
		if($artigos == "")
		{
			$artigos = "Alecrim";
		}
		else
		{
			$artigos = $artigos . '_' . "Alecrim";
		}
	}
	if(isset($_POST['tesoura']))
	{
		if($artigos == "")
		{
			$artigos = "Tesoura";
		}
		else
		{
			$artigos = $artigos . '_' . "Tesoura";
		}
	}
	if(isset($_POST['adubo']))
	{
		if($artigos == "")
		{
			$artigos = "Adubo";
		}
		else
		{
			$artigos = $artigos . '_' . "Adubo";
		}
	}
	if(isset($_POST['criacao']))
	{
		if($artigos == "")
		{
			$artigos = "Criacao";
		}
		else
		{
			$artigos = $artigos . '_' . "Criacao";
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
	
	$start = $start . $quant;
	header('Location:' . $BASE_URL . 'pages/encomendas/search_list.php?search=' . $start) ;
?>