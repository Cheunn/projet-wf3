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
//    public function ListChroniqueAll(){
//        $chroniques = $this->app['chronique.repository']->listChroniqueAllUsers();
//        
//        return $this->render(
//                'chroniques.html.twig',
//                [
//                    'chroniques' => $chroniques
//                ]
//        );
//    }
    public function getChroniqueId($id)
    {
        $annonce = $this->app['chronique.repository']->find($id); 
               
        return $this->render(
            'single_chronique.html.twig',
            [
                'annonce' => $annonce,
           
                // 'categories' => $categories
            ]
        );
    }
    public function ListChroniqueAll(){
        $chroniques = $this->app['chronique.repository']->listChroniqueAllUsers();
        
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' => $chroniques
                ]
        );
    }
    public function ListNews(){
        $news = $this->app['chronique.repository']->ListChroniqueByType('news');
        
        return $this->render(
                'chroniques.html.twig',
                [
                    'news' => $news
                ]
        );
    }
    
    public function ListChroniques(){
        $chroniques = $this->app['chronique.repository']->ListChroniqueByType('chronique');
        
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' =>$chroniques
                ]
        );
    }
    
    public function ListChroniquesUser(){
        $chroniquesUser = $this->app['chronique.repository']->ListChroniqueByUserType('user_chronique');
        
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniquesUser' => $chroniquesUser
                ]
        );
    }
    
    public function ListChroniquesAsso(){
        $chroniquesAsso = $this->app['chronique.repository']->ListChroniqueByUserType('asso_chronique');
        
        return $this->render(
                'single_chroniques.html.twig',
                [
                    'chroniquesUser' => $chroniquesAsso
                ]
        );
    }

    
    public function findByRubrique(){
             $chroniques = $this->app['chronique.repository']->findByRubrique('chronique_rubrique');
             $categories = $this->app['category.repository']->findAllAside();
             
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' => $chroniques,
                    'categories' => $categories                
                ]
        );
    }    
    
    public function listActionMain(){
             $chroniques = $this->app['chronique.repository']->findAll('chronique_rubrique');
             $categories = $this->app['category.repository']->findAllAside();
             
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' => $chroniques,
                    'categories' => $categories                
                ]
        );
    }    

}