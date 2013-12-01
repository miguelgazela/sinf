<?php
    // Setup Smarty
    include_once ($BASE_PATH .'libs/Smarty/Smarty.class.php');
    $smarty = new Smarty;

    $smarty->setTemplateDir($BASE_PATH . "templates/");    
    $smarty->setCompileDir($BASE_PATH . "templates_c/");

    // Send some common variables to Smarty
    $smarty->assign("BASE_URL", $BASE_URL);

    date_default_timezone_set("Europe/Lisbon");

    // Send error messages to Smarty and delete them
    //$smarty->assign("s_error", $_SESSION['s_error']);
    //$_SESSION['s_error'] = null;
    
    // Send ok messages to Smarty and delete them
    //$smarty->assign("s_ok", $_SESSION['s_ok']);
    //$_SESSION['s_ok'] = null;

    // Send form values to Smarty and PHP and delete them
    //$smarty->assign("s_values", $_SESSION['s_values']);
    //$_SESSION['s_values'] = null;   

    // Send session variables to Smarty
    $smarty->assign("s_id", $_SESSION['s_id']);
    $smarty->assign("s_nome", $_SESSION['s_nome']);
    $smarty->assign('typeUser', $_SESSION['s_userType']);
    $smarty->assign('s_nif', $_SESSION['s_nif']);
    $smarty->assign('data', date("d M Y H:i", strtotime('now')));
    
    //$_SESSION['session_id'] = null;
    //$_SESSION['s_username'] = null;
    //$_SESSION['s_typeUser'] = null;
    
?>