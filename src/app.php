<?php

use Controller\CategoryController;
use Repository\AnnonceRepository;
use Repository\CategoryRepository;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider() );

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    // le User est declaré accessible dans twig dans la globale user_manager
    $twig->addGlobal('user_manager', $app['user.manager'] ); 
    return $twig;
});


  //A VOIR LIGNE CI DESSOUS
$app['user.manager'] = function() use ($app)            {   return new UserManager ($app['session']);  };
 
/*
 * Ajout de Doctrine DBAL ($app['db'])
 * NB a faire dans cmd : C:\xampp\htdocs\silex-blog>composer require "doctrine/dbal:~2.2"
 */

$app->register(new DoctrineServiceProvider, 
        [
            'db.options' => [
                                'driver'=> 'pdo_mysql',
                                'host'=> 'localhost',
                                'dbname'=> 'projet', 
                                'user'=> 'root', 
                                'password'=> '', 
                                'charset'=> 'utf8'
                            ]
        ]
 );

// gestionnaire de sessions symfony
$app->register(new SessionServiceProvider());

// CONTROLLERS

/* FRONT */
 $app['index.controller'] = function() use ($app) {
     return new Controller\IndexController ($app);  
};

$app['user.controller'] = function() use ($app) {   
    return new Controller\UserController ($app);  
    
};
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
$app['annonce.controller'] = function () use ($app) {
    return new Controller\AnnonceController($app);
};
//MONDAY
//MONDAY
//MONDAY
//MONDAY
//MONDAY
$app['category.controller'] = function () use ($app) {
    return new Controller\CategoryController($app);
};

/* ADMIN */

$app['admin.annonce.controller'] = function () use ($app) {
    return new \Controller\Admin\AnnonceController($app);
};


$app['admin.category.controller'] = function () use ($app) {
    return new CategoryController($app);
};

// REPOSITORIES
$app['user.repository'] = function() use ($app) {   
    return new Repository\UserRepository( $app['db']  ); 
    
};

$app['annonce.repository'] = function () use ($app) {
    return new AnnonceRepository($app['db']);
};

$app['category.repository'] = function () use ($app) {
    return new CategoryRepository($app['db']);
};


return $app;


