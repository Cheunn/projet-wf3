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

/* Cheunn */


/* Julien */

/* SINGLE ANNONCE REDIRECTION */
$app
    ->match('/single_annonce', 'annonce.controller:singleAnnonce')  
        ->assert('id', '\d+')
        ->bind('single_annonce')
;

$app
    ->match('/annonce/edition', 'annonce.controller:editAction')
    ->bind('annonce_edit')
;
/* BOUCLE CATEGORY */ /* BOUCLE CATEGORY */
$app
    ->match('/', 'category.controller:listActionChronique')
    ->bind('category_list')
;
/* BOUCLE CATEGORIE */
$app
    ->match('/', 'annonce.controller:lastThree')
    ->bind('annonce_loop')
;

$app
    ->match('/annonce/{id}', 'category.controller:listActionChronique')
    ->assert('id', '\d+')
    ->bind('category_list')
;

/* Jaoued */


/* Anis */

//Handicap

$bind = $app->get('/handicap/{id}', 'handicap.controller:handicapAction')
        ->bind('handicap');

/* ADMIN  */

$admin=$app['controllers_factory'];  // crée un groupe de routes

$app->mount('/admin', $admin);      // VERIFIER ORDRE

$admin->before (function() use ($app){
    if (! $app['user.manager']->isAdmin()) $app->abort(403, 'Acces refuse') ; 
}) ;

/* Cheunn */

// CATEGORY

$admin
    ->get('/category', 'admin.category.controller:listAction')
    ->bind('admin_categories')
;

$admin
        ->get('/category/{type}', 'admin.category.controller:listByType')
        ->assert('type','[annonce]|[chronique]')
        ->bind('admin_categories_by_type')
;

$admin
        ->match('/category/edition/{id}', 'admin.category.controller:editAction')
        ->value('id', null)
        ->bind('admin_categories_edit')
;

$admin
    ->get('/category/suppression/{id}', 'admin.category.controller:deleteAction')
    ->assert('id', '\d+') // force id a être un nombre
    ->bind('admin_category_delete')
;

// Chhronique

$admin
        ->get("/chroniques", "admin.chronique.controller:listAction")
        ->bind("admin_chroniques")
;

$admin
        ->match('/chronique/edition/{id}', 'admin.chronique.controller:editAction')
        ->value('id', null)
        ->bind('admin_chronique_edit')
;

$admin
    ->get('/chronique/suppression/{id}', 'admin.chronique.controller:deleteAction')
    ->assert('id', '\d+') // force id a être un nombre
    ->bind('admin_chronique_delete')
;

/* Julien */

//ANNONCE

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

/* Jaoued */



/* Anis */

//******************ROUTE POUR ADMIN HANDICAP*******************

// localhost/projet-wf3/web/index_dev.php/admin/handicap
$admin->get('/handicap', 'admin.handicap.controller:listAction')
            ->bind('admin_handicap');

$admin->match('/handicap/edition/{id}', 'admin.handicap.controller:editAction')
            ->value('id', null) // id est optionnel est vaut null par défaut
            ->bind('admin_handicap_edit');
//
$admin->get('/handicap/supression/{id}', 'admin.handicap.controller:deleteAction')
            ->assert('id', '\d+')
            ->bind('admin_handicap_delete');

//******************ROUTE POUR ADMIN Tag*******************

// localhost/projet-wf3/web/index_dev.php/admin/tag
$admin->get('/tag', 'admin.tag.controller:listAction')
            ->bind('admin_tag');

$admin->match('/tag/edition/{idtag}', 'admin.tag.controller:editAction')
            ->value('idtag', null) // id est optionnel est vaut null par défaut
            ->bind('admin_tag_edit');
//
$admin->get('/tag/supression/{idtag}', 'admin.tag.controller:deleteAction')
            ->assert('idtag', '\d+')
            ->bind('admin_tag_delete');

/* USER */

$user=$app['controllers_factory'];  // crée un groupe de routes

$app->mount('/user', $user);      

$user->before (function() use ($app){
    if (! $app['user.manager']->getUser()) $app->abort(403, 'Acces refuse') ; 
}) ;

/* Cheunn */


/* Julien */


/* Jaoued */


/* Anis */

// COMMON FILES

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