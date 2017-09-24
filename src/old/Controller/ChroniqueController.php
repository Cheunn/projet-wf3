<?php
namespace Controller;

use Controller\ControllerAbstract;
use Entity\Chronique;
use Entity\Category;

/**
 * Description of ChroniqueController
 *
 * @author Etudiant
 */
class ChroniqueController extends ControllerAbstract{
    
    public function listMemberChronique($id){
        $chroniques = $this->app['chronique.repository']->listByUserId($id);
        
        return $this->render('profil/chronique/list.html.twig',
                [
                    'chroniques' => $chroniques
                ]
        );
    }
}
