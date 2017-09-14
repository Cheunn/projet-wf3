<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

$admin = $app['controllers_factory']
;
$app->mount('/admin', $admin);

$admin
    ->get('/annonces', 'admin.annonce.controller:listAction')
    ->bind('admin_annonces')
;

$admin
    ->match('/annonce/edition/{id}', 'admin.annonce.controller:editAction')
    ->value('id', null) // id est optionnel et vaut null par défaut
    ->bind('admin_annonce_edit')
;

$admin
    ->get('/annonce/suppression/{id}', 'admin.annonce.controller:deleteAction')
    ->assert('id', '\d+') // force id a être un nombre
    ->bind('admin_annonce_delete')
;

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


