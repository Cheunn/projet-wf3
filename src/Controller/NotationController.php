<?php
namespace Controller;

use Entity\Notation;


class NotationController extends ControllerAbstract
{

    
    
    public function registerAction()
    {
        $notation = new Notation(); 
        $this->app['notation.controller']->controle_Saisie($notation, 'insert');
    
        return $this->render('notation/register.html.twig',['notation' => $notation, 'createprofil' => 'yes']);
    
        if (!empty($_POST)) 
       {
			
            $this->sanitizePost();
            
            $notation
                ->setRole($_POST['role']) 
                ->setEmail($_POST['email'])
                ->setPassword($_POST['password'])	
                ->setName($_POST['name'])
                    ->setDate_create($_POST['date_create'])
            ;
          
    
                 
                $this->app['notation.repository']->save($notation);
                $this->addFlashNotation('Enregistrement effectué', 'success');
                return $this->redirectRoute('homepage');
    
        }

 
        return $this->render(
            'notation/login.html.twig',
            [
                'email' => $email
            ]
        );
    }
    
 
     
    
     public function getMyNotations($userreceiver )
    {
        $notations  = $this->app['notation.repository']->getMyNotations($userreceiver );

         return $this->render('notation/consultProfil.html.twig',
                    [
                      
                        'notations'      =>  $notations
                    ]
                ); 
       
    }
    
    
    public function LireNotation($id_notation )
    {
        $notation  = $this->app['notation.repository']->LireNotation($id_notation );
        dump($var); die; 
         return $this->render('LireNotation/Lire.html.twig',
                    [
                      
                        'notation'      =>  $notation
                    ]
                ); 
       
    }

    
    

}
