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
        
        return $this->render('chroniques.html.twig',
                [
                    'chroniques' => $chroniques
                ]
        );
    }
    
    public function ListNews(){
        $news = $this->app['chronique.repository']->ListChroniqueByType('news');
        $annonces = $this->app['annonce.repository']->findLastSix();      
        return $this->render('news.html.twig',
                [
                    'news' => $news,
                    'annonces'=> $annonces
                ]
        );
    }
  
    public function getChroniqueId($id)
    {
        $chronique = $this->app['chronique.repository']->find($id); 
        $annonces = $this->app['annonce.repository']->findLastSix();       
       
        return $this->render(
            'single_chronique.html.twig',
            [
                'chronique' => $chronique,
                'annonces'=> $annonces
            ]
        );
    }
    
    public function getNewsId($id)
    {
        $news = $this->app['chronique.repository']->findNews($id); 
        $annonces = $this->app['annonce.repository']->findLastSix();       
       
        return $this->render(
            'single_news.html.twig',
            [
                'news' => $news,
                'annonces'=> $annonces
            ]
        );
    }
    
    public function lastTwo()
    {
        $chroniques = $this->app['chronique.repository']->findLastTwo(); 
                     
        return $this->render(
            'index.html.twig',
            [               
                'chroniques' => $chroniques
                
            ]    
        );
    }
          
    public function ListChroniques(){
        $chroniques = $this->app['chronique.repository']->ListChroniqueByType('chronique');
        $categories = $this->app['category.repository']->findAllAside();
        $annonce = $this->app['annonce.repository']->findLastSix();  
        
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' => $chroniques,
                    'categories' => $categories,
                    'annnonce' => $annonce
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

    
    public function findByRubrique($rubrique){
             $chroniques = $this->app['chronique.repository']->findByRubrique($rubrique);
             $categories = $this->app['category.repository']->findAllAside();
             $annonces = $this->app['annonce.repository']->findLastSix(); 
             
        return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' => $chroniques,
                    'categories' => $categories,
                    'annonces'=> $annonces
                ]
        );
    }    
    
    public function listActionMain(){
             $chroniques = $this->app['chronique.repository']->findAll();
             $categories = $this->app['category.repository']->findAllAside();
             $annonce = $this->app['annonce.repository']->findLastSix();  
      
             return $this->render(
                'chroniques.html.twig',
                [
                    'chroniques' => $chroniques,
                    'categories' => $categories,
                    'annnonce' => $annonce
                ]
        );
    }  
    
    public function lastSixChroniquesHeader()
    {
        $chroniques = $this->app['chronique.repository']->findLastSix(); // $limit
        
        return $this->render(
            'chronique_menu.html.twig',
            [               
                'chroniques' => $chroniques
            ]
            
        );
    }
    
    public function lastSixNewsHeader()
    {
        $news = $this->app['chronique.repository']->findLastSixNews(); // $limit
        
        return $this->render(
            'news_menu.html.twig',
            [               
                'news' => $news
            ] 
        );
    }
    
    public function IndexChroniqueUser(){
        $chroniquesUser = $this->app['chronique.repository']->findChroniqueIndex('user_chronique',2);
        
        return $this->render(
                'index_chronique_user.html.twig',
                [
                    'chroniquesUser' => $chroniquesUser
                ]
        );
    }
    
    public function IndexChroniqueAsso(){
        $chroniquesAsso = $this->app['chronique.repository']->findChroniqueIndex('asso_chronique',2);
        
        return $this->render(
                'index_chronique_asso.html.twig',
                [
                    'chroniquesAsso' => $chroniquesAsso
                ]
        );
    }
    
    public function IndexNews(){
        $chroniquesNews = $this->app['chronique.repository']->findChroniqueIndex('news',2);
        
        return $this->render(
                'index_chronique_news.html.twig',
                [
                    'chroniquesNews' => $chroniquesNews
                ]
        );
    }

}

