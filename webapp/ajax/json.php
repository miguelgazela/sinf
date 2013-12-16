<?php
    include_once('../common/init.php');

$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');


if($_SESSION['s_userType'] == "CLIENT") {
    $api_url = $BASE_URL_PRIMAVERA . 'encomendasclientes/'.$_SESSION['s_id'];
  } else { // MANAGER
    $api_url = $BASE_URL_PRIMAVERA . 'encomendas';
  }
  
  $array = array();

  $packages_aentregar = json_decode(file_get_contents($api_url), true);
  
  foreach($packages_aentregar as &$package) 
  {
    $produtosNome = "";
    $cont = 0;
    $artigos = $package['ListaArtigos'];
    foreach ($artigos as $artigo) {
      if ($cont==0) {
        $produtosNome = $artigo['descricaoArtigo'];
      }
      else
        $produtosNome = $produtosNome.", ".$artigo['descricaoArtigo'];
      $cont++;
    }
    $dataAppend = date("d/m/Y", strtotime($package['DataInicio']));
    $idPackage = $package['codEncomenda'];
    //$package['DataInicio'];
    $array[] = array($dataAppend,$idPackage,'#','#51a351');  
  }

$array2 = array(
  array(
    "7/1/2014", 
    'encomenda de adubo',
    '#',
    '#51a351',
    'lolo'
  ),
  array(
    "7/1/2014", 
    'encomenda de adubo',
    '#',
    '#51a351',
    'lolo'   
  ),
  array(
    "7/1/2014", 
    'paspdaosd',
    '#',
    '#51a351',
    'poasdpasdpm'   
  ),
  array(
    "7/1/2014", 
    'fuck',
    '#',
    '#51a351',
    'mailparse_rfc822_parse_addresses(addresses)'   
  ),
  array(
    "8/1/2014", 
    'encomenda de adubo',
    '#',
    '#51a351',
    'lolo'   
  )
);

echo json_encode($array2);
exit;
?>