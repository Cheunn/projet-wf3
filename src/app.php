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
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

$app->register(
   new Silex\Provider\DoctrineServiceProvider(),
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


$app['admin.annonce.controller'] = function () use ($app) {
    return new Controller\Admin\AnnonceController($app);
};


$app['annonce.repository'] = function () use ($app) {
    return new Repository\AnnonceRepository($app['db']);
};



return $app;