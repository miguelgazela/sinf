<?php
    // initialize
    include_once('../../common/init.php');



    if(!isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }

    // temporary reading from JSON file
    $file = $BASE_URL."tmp-data/utilizadores.json";
    $user = json_decode(file_get_contents($file), true);
    $packages = $user['m_Item2'];

    $graph_data = array('-' => 0);
    $graph_data_2 = array('-' => 0);

    foreach($packages as $package) {
        $month_year = date("M Y", strtotime($package['DataInicio']));

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
    $smarty->assign('typeUser', "client");
    $smarty->display('auth/view.tpl');
?>
