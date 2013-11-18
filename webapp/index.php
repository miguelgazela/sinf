<?php
    include_once('common/init.php');

    $app->get('/', function() use ($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/encomendas/list.php?type=active');
    });

    $app->get('/login/', function() use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/auth/login.php');
    });

    $app->get('/logout/', function() use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'actions/auth/logout.php');
    });

    $app->get('/encomendas/ativas', function() use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/encomendas/list.php?type=active');
    });

    $app->get('/encomendas/historico', function() use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/encomendas/list.php?type=inactive');
    });

    $app->get('/encomendas/pesquisa', function() use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/encomendas/search.php');
    });

    $app->get('/encomendas/calendario/', function() use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/encomendas/calendar.php');
    });

    $app->get('/utilizador/:id', function($id) use($app, $BASE_URL) {
        $app->redirect($BASE_URL.'pages/utilizadores/view.php?id='.$id);;
    });



    // API

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