<?php
namespace Controller;

use Entity\Notation;


class NotationController extends ControllerAbstract
{

    
      public function renvoieVille() {
        $list = $this->app['cp.repository']->findVille($_POST["codePostal"]);

        if (empty($list)) {
            $response = ['reponse' => 'ERROR'];
        } else {
            $list0 = array('reponse' => 'OK');
            $response = array_merge($list0, $list);
        }
        
        return new JsonResponse($response);
    }
    
    public function envoyerNote()
    {
        echo 'coucou';//die('titi');
       dump($_POST);
        
        $notation = new Notation(); 
        
            $this->sanitizePost();

         
            $notation
                ->setId_member_noteur($_POST['id_member_noteur']) 
                ->setId_member_note($_POST['id_member_note'])
                ->setNote($_POST['note'])	
                ->setComment($_POST['comment'])
             
            ;
          

                $this->app['notation.repository']->save($notation);
                $this->addFlashNotation('Enregistrement effectué', 'success');
                return $this->redirectRoute('homepage');


 
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
