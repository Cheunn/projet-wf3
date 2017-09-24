<?php
use Repository\AnnonceRepository;
use Repository\CategoryRepository;
use Controller\Admin\CategoryController;
use Controller\Admin\ChroniqueController;
use Repository\ChroniqueRepository;
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


$app['user.manager'] = function() use ($app)            {   return new Service\UserManager ($app['session']);  };

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

// gestionnaire de sessions de Symfony ($app['session'])
$app->register(new Silex\Provider\SessionServiceProvider());

// CONTROLLERS

/* FRONT */
$app['index.controller'] = function() use ($app)        {   return new Controller\IndexController ($app);  };
$app['user.controller'] = function() use ($app)         {   return new Controller\UserController ($app);  };
$app['cp.controller'] = function() use ($app)           {   return new Controller\CpController ($app);  };
$app['message.controller'] = function() use ($app)      {   return new Controller\MessageController ($app);  };
$app['notation.controller'] = function() use ($app)      {   return new Controller\NotationController ($app);  };

$app['annonce.controller'] = function () use ($app) {
    return new Controller\AnnonceController($app);
};
$app['chronique.controller'] = function () use ($app) {
    return new Controller\ChroniqueController($app);
};
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

$app['admin.chronique.controller'] = function () use ($app){
    return new ChroniqueController($app);
};

$app['admin.handicap.controller'] = function () use ($app) {
    return new Controller\Admin\HandicapController($app);
};

$app['admin.tag.controller'] = function () use ($app) {
    return new Controller\Admin\TagController($app);
};

$app['layout.controller']= function () use ($app){
    return new Controller\LayoutController($app);
};

// REPOSITORIES

$app['user.repository'] = function() use ($app)         {   return new Repository\UserRepository( $app['db']  ); };

$app['cp.repository'] = function() use ($app)         {   return new Repository\CpRepository( $app['db']  ); };
$app['notation.repository'] = function() use ($app)         {   return new Repository\NotationRepository( $app['db']  ); };

$app['annonce.repository'] = function () use ($app) {
    return new AnnonceRepository($app['db']);
};

$app['category.repository'] = function () use ($app) {
    return new CategoryRepository($app['db']);
};

$app['chronique.repository'] = function () use ($app){
    return new ChroniqueRepository($app['db']);
}; 
$app['handicap.repository'] = function () use ($app) {
    return new Repository\HandicapRepository($app['db']);
};
  
$app['tag.repository'] = function () use ($app) {
    return new Repository\TagRepository($app['db']);
};

$app['message.repository'] = function () use ($app) {
    return new Repository\MessageRepository($app['db']);
};

// USER

$app['user.chronique.controller'] = function () use ($app){
    return new Controller\User\ChroniqueController($app);
};

$app['user.annonce.controller'] = function () use ($app){
    return new Controller\User\AnnonceController($app);
};

return $app;

