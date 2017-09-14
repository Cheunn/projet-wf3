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



//*******FRONT handicap***************

$bind = $app->get('/handicap/{id}', 'handicap.controller:handicapAction')
        ->bind('handicap');


// crée un groupe de route
$admin = $app['controllers_factory'];





$app->mount('/admin', $admin);

// localhost/projet-wf3/web/index_dev.php/admin/handicap
$admin->get('/handicap', 'admin.handicap.controller:listAction')
            ->bind('admin_handicap');

//$admin->match('/handicap/edition/{id}', 'admin.handicap.controller:editAction')
//            ->value('id', null) // id est optionnel est vaut null par défaut
//            ->bind('admin_handicap_edit');
//
//$admin->get('/handicap/supression/{id}', 'admin.handicap.controller:deleteAction')
//            ->assert('id', '\d+')
//            ->bind('admin_handicap_delete');
