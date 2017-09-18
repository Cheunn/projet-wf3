<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* FRONT  */

$app->get('/', 'index.controller:indexAction')                  ->bind('homepage');
$app->match('/inscription', 'user.controller:registerAction')   ->bind('inscription');
$app->match('/inscription/APIautoCompletion', 'cp.controller:renvoieVille') ->bind('APIautoCompletion');
$app->match('/connexion', 'user.controller:loginAction')        ->bind('connexion');
$app->match('/deconnexion', 'user.controller:logoutAction')     ->bind('deconnexion');


   /* ADMIN  */

$admin=$app['controllers_factory'];  // crée un groupe de routes

$admin->before (function() use ($app){
    if (! $app['user.manager']->isAdmin()) $app->abort(403, 'Acces refuse') ; 
}) ;
$app->mount('/admin', $admin);      // toutes les routes créées par $admin sont prefixées par admin


$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});

