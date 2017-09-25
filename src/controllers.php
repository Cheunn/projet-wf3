<?php


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Application;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* TEST POUR HEADER */

/*$before = function (Application $app) {
    $annonces = new Application();
    $annonces = $app['layout.controller']->annonceMenu();
};*/
/*$app
        ->match('/{reste}', 'layout.controller:annonceMenu')
        ->assert('reste', '.*')
        ->bind('annonce_menu')
;*/

/*$app->before (function() use ($app){
    $app['layout.controller']->annonceMenu() ;  
}) ;*/

$app->get('/', 'index.controller:indexAction')                  ->bind('homepage');
$app->match('/inscription', 'user.controller:registerAction')   ->bind('inscription');
$app->match('/inscription/APIautoCompletion', 'cp.controller:renvoieVille') ->bind('APIautoCompletion');
$app->match('/connexion', 'user.controller:loginAction')        ->bind('connexion');
$app->match('/deconnexion', 'user.controller:logoutAction')     ->bind('deconnexion');
$app->match('/about', 'index.controller:about')                 ->bind('about');


/* USER */

$user = $app['controllers_factory'];  // crée un groupe de routes

$app->mount('/user', $user);      


$user->before (function() use ($app){
    if (! $app['user.manager']->getUser()) $app->abort(403, 'Acces refuse') ; 
}) ;

/* Jaoued */

$user->match('/profil', 'user.controller:profilUser')  
       ->bind('profilUser');

$user->match('/profil/{id}', 'user.controller:profilUser') 
            ->assert('id', '\d+')
            ->bind('profilUser');

$user->match('/updateProfil', 'user.controller:updateProfil')     ->bind('updateProfil');

$user->match('/LireMessage/{id}', 'message.controller:LireMessage') 
        ->assert('id', '\d+')
        ->bind('LireMessage');
$user->match('/posterMessage/{id}', 'user.controller:posterMessage')
        ->assert('id', '\d+')
        ->bind('posterMessage');

$user->match('/messProfilToUs', 'user.controller:messProfilToUs')    ->bind('messProfilToUs');


/* Cheunn */

/* USER CHRONIQUES*/

$user->get('/chronique','user.chronique.controller:listUserChronique')
        ->bind('user_chronique_list')        
;

$user->match('/chronique/edit/{id}','user.chronique.controller:editAction')
        ->value('id', null)
        ->bind('user_chronique_edit')        
;

$user->match('/chronique/supression/{id}','user.chronique.controller:deleteAction')
        ->assert('id', '\d+')
        ->bind('user_chronique_delete')
;

/* USER ANNONCES*/

$user->get('/annonce','user.annonce.controller:listUserAnnonce')
        ->bind('user_annonce_list')        
;

$user->match('/annonce/edit/{id}','user.annonce.controller:editAction')
        ->value('id', null)
        ->bind('user_annonce_edit')        
;

$user->match('/annonce/supression/{id}','user.annonce.controller:deleteAction')
        ->assert('id', '\d+')
        ->bind('user_annonce_delete')
;

/* Anis */

/* FRONT */  
  
/* Cheunn */

$app
        ->get('/annonce/menu', 'annonce.controller:lastSixHeader')
        ->bind('annonce_menu')
;

$app
        ->get('/chronique/menu', 'chronique.controller:lastSixChroniquesHeader')
        ->bind('chronique_menu')
;

$app
        ->get('/news/menu', 'chronique.controller:lastSixNewsHeader')
        ->bind('news_menu')
;

$app
        ->get('/breadcrumb', 'layout.controller:breadcrumbs')
        ->bind('breadcrumb')
;

/* Julien */

/* SINGLE ANNONCE REDIRECTION */

$app
    ->match('/annonces', 'annonce.controller:listActionMain')  
    ->bind('annonces')
;
$app
    ->match('/single_annonce', 'annonce.controller:singleAnnonce')  
    ->assert('id', '\d+')
    ->bind('single_annonce')
;
$app
    ->match('/single_annonce/{id}', 'annonce.controller:lastThreeSingle')  
    ->assert('id', '\d+')
    ->bind('single_annonce')
;
$app
    ->get('/single_annonce/{id}', 'annonce.controller:getAnnonceId')  
    ->assert('id', '\d+')
    ->bind('single_annonce')
;
$app
    ->get('/annonces/{rubrique}' ,'annonce.controller:findByRubrique')  
    ->bind('annonce_rubrique')
;
$app
    ->match('/annonce/edition', 'annonce.controller:editAction')
    ->bind('annonce_edit')
;
// a jaoued
$app
   ->get('/single_annonce/{id}', 'annonce.controller:getAnnonceId')  
   ->assert('id', '\d+')
   ->bind('single_annonce_jaoued')
;
/* CHRONIQUE COTE FRONT */

$app
    ->match('/chroniques', 'chronique.controller:listActionMain')  
    ->bind('chroniques')
;
$app
    ->get('/single_chronique/{id}', 'chronique.controller:getChroniqueId')  
    ->assert('id', '\d+')
    ->bind('single_chronique')
;

$app
    ->get('/chroniques/{rubrique}' ,'chronique.controller:findByRubrique')  
    ->bind('chronique_rubrique')
;

$app
    ->match('/' , 'chronique.controller:findlastTwo')  
    ->bind('chronique_front')
;

/* BOUCLE CATEGORY */ /* BOUCLE CATEGORY */
$app
    ->match('/', 'category.controller:listActionChronique')
    ->bind('category')
;
/* BOUCLE CATEGORIE */
$app
    ->match('/', 'annonce.controller:lastThree')
    ->bind('annonce_loop')
;
/*
$app
    ->match('/single_annonce/{id}', 'annonce.controller:lastThreeSingle')  
        ->assert('id', '\d+')
        ->bind('single_annonce');
*/
$app
    ->match('/annonce/{id}', 'category.controller:listActionChronique')
    ->assert('id', '\d+')
    ->bind('category_list')
;

/* Jaoued */

/* Anis */

//Handicap

$bind = $app
        ->get('/handicap/{id}', 'handicap.controller:handicapAction')
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

$admin->get('/tag/supression/{idtag}', 'admin.tag.controller:deleteAction')
            ->assert('idtag', '\d+')
            ->bind('admin_tag_delete');


//******************ROUTE POUR ADMIN Type*******************

// localhost/projet-wf3/web/index_dev.php/admin/type
$admin->get('/type', 'admin.type.controller:listAction')
            ->bind('admin_type');

$admin->match('/type/edition/{id_type}', 'admin.type.controller:editAction')
            ->value('id_type', null) // id est optionnel est vaut null par défaut
            ->bind('admin_type_edit');

$admin->get('/type/supression/{id_type}', 'admin.type.controller:deleteAction')
            ->assert('id_type', '\d+')
            ->bind('admin_type_delete');


//******************ROUTE POUR ADMIN Category*******************

$admin
    ->get('/category', 'admin.category.controller:listAction')
    ->bind('admin_category')
;

$admin
        ->get('/category/{type}', 'admin.category.controller:listByType')
        ->assert('type','[annonce]|[chronique]')
        ->bind('admin_category_type')
;

$admin
        ->match('/category/edition/{id}', 'admin.category.controller:editAction')
        ->value('id', null)
        ->bind('admin_category_edit')
;

$admin
    ->get('/category/suppression/{id}', 'admin.category.controller:deleteAction')
    ->assert('id', '\d+') // force id a être un nombre
    ->bind('admin_category_delete')
;


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
