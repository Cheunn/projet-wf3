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
        
       
        $headerAnnonces = $this->app['annonce.repository']->findLastThree2(12);
        
        
        
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
}
