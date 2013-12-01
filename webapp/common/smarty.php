<?php
    // Setup Smarty
    include_once ($BASE_PATH .'libs/Smarty/Smarty.class.php');
    $smarty = new Smarty;

    $smarty->setTemplateDir($BASE_PATH . "templates/");    
    $smarty->setCompileDir($BASE_PATH . "templates_c/");

    // Send some common variables to Smarty
    $smarty->assign("BASE_URL", $BASE_URL);

    // Send error messages to Smarty and delete them
    $_SESSION['s_error'] = null;
    $smarty->assign("s_error", $_SESSION['s_error']);
    
    
    // Send ok messages to Smarty and delete them
     $_SESSION['s_ok'] = null;
    $smarty->assign("s_ok", $_SESSION['s_ok']);
   

    // Send form values to Smarty and PHP and delete them
     $_SESSION['s_values'] = null;
    $smarty->assign("s_values", $_SESSION['s_values']);
    $_values = $_SESSION['s_values'];
   

    // Send session variables to Smarty
    $_SESSION['session_id'] = null;
    //$smarty->assign("s_username", $_SESSION['s_username']);
    $smarty->assign("session_id", $_SESSION['session_id']);
?>