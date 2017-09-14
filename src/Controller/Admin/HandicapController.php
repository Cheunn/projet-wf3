<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;

class HandicapController extends ControllerAbstract {
    
    public function listAction() {
        
        $handicap = $this->app['handicap.repository']->findAll();
        
        return $this->render(
                'Handicap/Handicap.html.twig',
                [
                    'handicap' => $handicap
                ]
        );
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }