<?php

use Controller\Admin\CategoryController;
use Controller\Admin\ChroniqueController;
use Repository\CategoryRepository;
use Repository\ChroniqueRepository;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

/*
 * Ajout de Doctrine DBAL ($app['db'])
 * nécessite d'avoir exécuté :
 * composer require "doctrine/dbal:~2.2"
 * en ligne de commande dans le projet
 */
$app->register(
    new DoctrineServiceProvider(),
    [
        'db.options' => [
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'projet',
            'user' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ]
    ]
);

// CONTROLLERS

/* FRONT */


/* ADMIN */

$app['admin.category.controller'] = function () use ($app) {
    return new CategoryController($app);
};

$app['admin.chronique.controller'] = function () use ($app){
    return new ChroniqueController($app);
};



//Repositories

$app['category.repository'] = function () use ($app) {
    return new CategoryRepository($app['db']);
};

$app['chronique.repository'] = function () use ($app){
    return new ChroniqueRepository($app['db']);
};

return $app;
