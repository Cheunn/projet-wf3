<?php


use Controller\CategoryController;
use Repository\AnnonceRepository;
use Repository\CategoryRepository;
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

$app->register(new \Silex\Provider\SessionServiceProvider());

// CONTROLLERS

/* FRONT */

//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
$app['annonce.controller'] = function () use ($app) {
    return new Controller\AnnonceController($app);
};
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY
//FRIDAY


/* ADMIN */

$app['admin.annonce.controller'] = function () use ($app) {
    return new \Controller\Admin\AnnonceController($app);
};


$app['admin.category.controller'] = function () use ($app) {
    return new CategoryController($app);
};

// REPOSITORIES

$app['annonce.repository'] = function () use ($app) {
    return new AnnonceRepository($app['db']);
};

$app['category.repository'] = function () use ($app) {
    return new CategoryRepository($app['db']);
};

return $app;


