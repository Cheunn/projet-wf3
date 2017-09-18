<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

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

/*
 * Ajout de Doctrine DBAL ($app['db'])
 * NB a faire dans cmd : C:\xampp\htdocs\silex-blog>composer require "doctrine/dbal:~2.2"
 */
$app->register(new Silex\Provider\DoctrineServiceProvider, 
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
$app->register(new Silex\Provider\SessionServiceProvider());
$app['user.manager'] = function() use ($app)            {   return new Service\UserManager ($app['session']);  };


/* Controllers */

/* Front */
$app['index.controller'] = function() use ($app)            {   return new Controller\IndexController ($app);  };
$app['user.controller'] = function() use ($app)            {   return new Controller\UserController ($app);  };
$app['cp.controller'] = function() use ($app)            {   return new Controller\CpController ($app);  };

/* Back 

*/

/* Repositories */
$app['user.repository'] = function() use ($app)         {   return new Repository\UserRepository( $app['db']  ); };
$app['cp.repository'] = function() use ($app)         {   return new Repository\CpRepository( $app['db']  ); };

return $app;
