<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller\User;

use Controller\ControllerAbstract;
use Entity\Annonce;
use Entity\Category;


/**
 * Description of AnnonceController
 *
 * @author Etudiant
 */
class AnnonceController extends ControllerAbstract{
    
    public function editAction($id = null)
    {
        // pour construire la liste déroulante des rubriques
        $categories = $this->app['category.repository']->findAll();
        
        if (is_null($id)) {
            $annonce = new Annonce();
           // $annonce
                //->setCategory(new Category())
                //->setAuthor($this->app['user.manager']->getUser()) //IMPORTANT POUR POLUS TARD
           // ;
        } else {
            $annonce = $this->app['annonce.repository']->find($id);
            
            if (is_null($annonce)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $user = $this->app['user.manager']->getUser();
            
            $annonce
                ->setPost_title($_POST['post_title'])
                ->setParagraphe_1($_POST['paragraphe_1'])
                ->setParagraphe_2($_POST['paragraphe_2'])
                ->setUrl_img_1($_POST['url_img_1'])
                ->setUrl_img_2($_POST['url_img_2'])
                ->setUrl_img_3($_POST['url_img_3'])
                ->setMember_id_member($user->getId_member())
                ->setType_id_type($_POST['type_id_type'])
                ->setCategory_id_category($_POST['category'])
                ;
               

            //$annonce->getCategory_id_category()->setId_post($_POST['category']);
            
            // contrôle des champs de formulaire
            if (empty($_POST['post_title'])) {
                $errors['title'] = 'Le titre est obligatoire';
            } elseif (strlen($_POST['post_title']) > 45 || strlen($_POST['post_title']) < 6) {
                $errors['title'] = 'Le titre doit faire au moins 6 caractères et ne doit pas dépasser 45 caractères';
            }
            
            if (empty($_POST['paragraphe_1'])) {
                $errors['content'] = 'Une description est obligatoire';
            }
                       
            if (empty($errors)) {
                $this->app['annonce.repository']->save($annonce);
                $this->addFlashMessage("L'annonce est enregistré");
                
                return $this->redirectRoute('user_annonce_list');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'user/annonce/edit.html.twig',
            [
                'annonce' => $annonce,
                'categories' => $categories
            ]
        );
    }
    
    public function deleteAction($id)
    {
        $annonce = $this->app['annonce.repository']->find($id);
        
        if (is_null($annonce)) {
            $this->app->abort(404);
        }
        
        $this->app['annonce.repository']->delete($annonce);
        //$this->addFlashMessage("L'annonce est supprimé");
        
        return $this->redirectRoute('user_annonce_list');
    }
    

  /* DEV (jaoued) */ 
  public function listAnnoncesByUser($id){
        $user = $this->app['user.manager']->getUser();
        
        $annonces = $this->app['annonce.repository']->listByUserId($user->getId_member());
        
        return $this->render('user/annonce/list.html.twig',
                [
                    'annonces' => $annonces
                ]
        );
    }
  
  /* Cheunn */
  public function listUserAnnonce(){
  $user = $this->app['user.manager']->getUser();
        
        $annonces = $this->app['annonce.repository']->listByUserId($user->getId_member());
        
        return $this->render('user/annonce/list.html.twig',
                [
                    'annonces' => $annonces
                ]
        );
    }
    
     public function nbAnnoncesByUser($id){
        $user = $this->app['user.manager']->getUser();
        
        $annonces = $this->app['annonce.repository']->listByUserId($user->getId_member());
        
        return $this->render('user/annonce/list.html.twig',
                [
                    'annonces' => $annonces
                ]
        );
    }
    
    
}
