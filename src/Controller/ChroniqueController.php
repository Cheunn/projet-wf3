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
    public function ListChroniqueAll(){
        $chroniques = $this->app['chronique.repository']->listChroniqueAllUsers();
        
        return $this->render('',
                [
                    'chroniques' => $chroniques
                ]
        );
    }
    
    public function ListNews(){
        $news = $this->app['chronique.repository']->ListChroniqueByType('news');
        
        return $this->render('',
                [
                    'news' => $news
                ]
        );
    }
    
    public function ListChroniques(){
        $chroniques = $this->app['chronique.repository']->ListChroniqueByType('chronique');
        
        return $this->render('',
                [
                    'chroniques' =>$chroniques
                ]
        );
    }
    
    public function ListChroniquesUser(){
        $chroniquesUser = $this->app['chronique.repository']->ListChroniqueByUserType('user_chronique');
        
        return $this->render('',
                [
                    'chroniquesUser' => $chroniquesUser
                ]
        );
    }
    
    public function ListChroniquesAsso(){
        $chroniquesAsso = $this->app['chronique.repository']->ListChroniqueByUserType('asso_chronique');
        
        return $this->render('',
                [
                    'chroniquesUser' => $chroniquesAsso
                ]
        );
    }
}
