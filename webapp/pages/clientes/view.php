<?php
    // initialize
    include_once('../../common/init.php');

     if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

    if($_SESSION['s_userType'] == 'MANAGER')
    {

        $api_url = $BASE_URL_PRIMAVERA . 'detalhesutilizadores/'.$_GET['codCliente'];
        $user = json_decode(file_get_contents($api_url), true);

        //echo '<pre>';print_r($user);exit;

        $packagesAux = $user['m_Item2'];
		$packages = array_reverse($packagesAux);
        $graph_data = array('-' => 0);
        $graph_data_2 = array('-' => 0);
        $totalGasto = 0;

        foreach($packages as $package) {
            $month_year = date("M Y", strtotime($package['DataInicio']));

            $totalGasto += $package['totalMerc'];
            if(array_key_exists($month_year, $graph_data)){
                $graph_data[$month_year] = $graph_data[$month_year] + 1;
                $graph_data_2[$month_year] = $graph_data_2[$month_year] + ($package['totalMerc'] + 0);
            } else {
                $graph_data[$month_year] = 1;
                $graph_data_2[$month_year] = ($package['totalMerc'] + 0);
            }
        }

        // display smarty template
        $smarty->assign('user', $user['m_Item1']);
        $smarty->assign('packages', $packages);
        $smarty->assign('graph_data_keys', json_encode(array_keys($graph_data)));
        $smarty->assign('graph_data_values', json_encode(array_values($graph_data)));
        $smarty->assign('graph_data_values_2', json_encode(array_values($graph_data_2)));
        $smarty->assign('totalEncomendas', count($packages));
        $smarty->assign('totalGasto', $totalGasto);
        $smarty->display('clientes/view.tpl');
    }
?>
