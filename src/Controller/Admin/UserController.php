<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller\Admin;

/**
 * Description of UserController
 *
 * @author Etudiant
 */
class UserController {
    
   public function listAction()
    {
        $users = $this->app['user.repository']->findAll();
        return $this->render(
            'admin/user/list.html.twig',
            [
                'users' => $users
            ]
        );
    }
    
    public function editAction($id = null)
    {
        
        if (is_null($id)) {
            $user = new User();
           
        } else {
            $user = $this->app['user.repository']->find($id);
            
            if (is_null($user)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $user
                ->setEmail($_POST['email'])
                ->setParagraphe_1($_POST['paragraphe_1'])
                ->setParagraphe_2($_POST['paragraphe_2'])
                ->setUrl_img_1($_POST['url_img_1'])
                ->setUrl_img_2($_POST['url_img_2'])
                ->setUrl_img_3($_POST['url_img_3'])
                ->setMember_id_member(1)
                ->setType_id_type(1)
                ->setCategory_id_category($_POST['category_id_category'])
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
                
                return $this->redirectRoute('admin_annonces');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'admin/user/edit.html.twig',
            [
                'user' => $user,
            ]
        );
    }
    
    public function deleteAction($id)
    {
        $user = $this->app['user.repository']->find($id);
        
        if (is_null($user)) {
            $this->app->abort(404);
        }
        
        $this->app['user.repository']->delete($user);
        //$this->addFlashMessage("L'annonce est supprimé");
        
        return $this->redirectRoute('admin_user');
    }
}
