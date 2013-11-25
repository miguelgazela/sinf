<?php
    include_once('common/init.php');

    $app->get('/', function() use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/auth/login.php');
    });

    $app->run();
?>