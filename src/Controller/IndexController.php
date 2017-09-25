<?php
namespace Controller;


class IndexController extends ControllerAbstract
{
    public function indexAction()
    {  
        $categories = $this->app['category.repository']->findAllChronique();
        $annonces = $this->app['annonce.repository']->findLastSix();
     
       return $this->render('index.html.twig', [
           
           'categories' => $categories,
           'annonces' => $annonces
               
               ]);
         // return $this->render('user/register.html.twig' );
    }
    
    public function about()
    {  
        $categories = $this->app['category.repository']->findAllChronique();
        $annonces = $this->app['annonce.repository']->findLastSix();
     
       return $this->render('about.html.twig', [
           
           'categories' => $categories,
           'annonces' => $annonces
               
               ]);
         //return $this->render('user/register.html.twig' );
    }
    
    
}
