<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['session_id'])) {
        header("Location: $BASE_URL"."login");
        die();
    }

    // temporary reading from JSON file
    $file = $BASE_URL."tmp-data/utilizadores.json";
    $user = json_decode(file_get_contents($file), true);

    // display smarty template
    $smarty->assign('user', $user['m_Item1']);
    $smarty->assign('packages', $user['m_Item2']);
    $smarty->display('clientes/view.tpl');
?>
