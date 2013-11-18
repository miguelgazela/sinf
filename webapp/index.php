<?php
    include_once('common/init.php');
    include_once ($BASE_PATH .'libs/Slim/Slim.php');

    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();

    $app->get('/', function() use ($app, $BASE_URL) {

        // TODO remove this
        $_SESSION['id'] = -1;

        if(isset($_SESSION['id'])) {
            $app->redirect($BASE_URL.'pages/encomendas/list.php?type=active');
        } else {
            $app->redirect($BASE_URL.'pages/auth/login.php');
        }
        
    });



    $app->get('/api', function() use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'api.html');
    });

    $app->get('/api/encomendas', function() use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'ajax/encomendas/all.php');
    });

    $app->get('/api/encomendas/:id', function($id) use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'ajax/encomendas/get.php?id='.$id);
    })->conditions(array("id" => '[0-9]{1,}'));

    $app->get('/api/encomendas/ativas', function() use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'ajax/encomendas/all.php?type=active');
    });

    $app->get('/api/encomendas/ativas/:id', function($id) use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'ajax/encomendas/get.php?id='.$id.'&type=active');
    })->conditions(array("id" => '[0-9]{1,}'));

    $app->run();
?>