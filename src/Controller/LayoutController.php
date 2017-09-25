<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Entity\Annonce;
use Entity\Category;
use Entity\User;
use Controller\AnnonceController;

/**
 * Description of LayoutController
 *
 * @author Etudiant
 */
class LayoutController extends ControllerAbstract {
    
    public function annonceMenu(){
        
       
        $headerAnnonces = $this->app['annonce.repository']->findLastThree(12);
        
        
        
        return $this->render('layout.html.twig',
                [
                    'headerAnnonces' => $headerAnnonces
                ]
        );
        
    }
    
    public function lol(){
        die("lili");
        
        return "toto";
    }
    
    function breadcrumbs($separator = ' » ', $home = 'Home') {

        $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        $base_url = substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/')) . '://' . $_SERVER['HTTP_HOST'] . '/';
        $breadcrumbs = array("<a href=$base_url>$home</a>");
        $tmp = array_keys($path);
        $last = end($tmp);
        unset($tmp);

        foreach ($path as $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_'), array('', ' '), $crumb));
        
        if ($x == 1){
            $test = "<a href=" . $base_url . $crumb . ">$title</a>";
            $breadcrumbs[] = $test;
            
        }elseif ($x > 1 && $x < $last){
            $tmp = ' for($i = 1; $i <= $x; $i++){ $tmp .= $path[$i] . "/"; } $tmp .= ' . ">$title";
            $breadcrumbs[] = $tmp;
            unset($tmp);
        }else{
        $breadcrumbs[] = "$title";
        }
        }
        $chemin = implode($separator, $breadcrumbs);
        
        return $this->render('breadcrumb.html.twig',
                [
                    $chemin
                ]
        );
            
    }
}
