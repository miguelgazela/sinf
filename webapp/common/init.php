<?php
    // This file is included in every page
    ini_set('display_errors', 'On');

    // production paths
    //$BASE_URL = 'http://paginas.fe.up.pt/~ei10076/projects/agiba/';
    //$BASE_PATH = '/usr/users2/mieic2010/ei10076/public_html/projects/agiba/';

    // development paths
    
    $BASE_URL = "http://localhost:8888/sinf/webapp/";
    $BASE_PATH = '/Users/migueloliveira/Dropbox/projects/sinf/webapp/';
    //$BASE_PATH = '/Users/nelsonmendes/Documents/Git/sinf/webapp/';

    // Slim Framework
    include_once ($BASE_PATH .'libs/Slim/Slim.php');
    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();

    require_once('database.php');
    require_once('session.php');
    require_once('smarty.php');
    require_once('functions.php');
    require_once('utilfunctions.php');
?>